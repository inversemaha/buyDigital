<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Dropbox;
use App\Models\JobApply;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ApplicantController extends Controller
{


    public function loginCheck(Request $request)
    {
        //return $request->all();

        if (Auth::guard('applicant')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            if ($request->previous_url != null) {
                return \redirect($request['previous_url']);
            }
            return \redirect('/applicant/address');
        } else {
            Alert::error('Sorry! ', "Email or password does not match or Your are not active");
            return back()->withInput();

        }
    }

    public function login()
    {
        if (Auth::guard('applicant')->check()) {
            return \redirect('/applicant/profile');
        }
        $previous = URL::previous();
        return view('common.applicant.login')->with('previous', $previous);
    }

    public function register()
    {
        if (Auth::guard('applicant')->check()) {
            return \redirect('/applicant/profile');
        }
        return view('common.applicant.register');
    }

    public function applyJob(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',

            /*'phone' => 'required|unique:applicants',
            'email' => 'required|unique:applicants',*/
            'image' => 'required|mimes:pdf',
        ]);
        if ($validator->fails()) {
            if ($validator->errors()->has('phone')) {
                Alert::error('Sorry! ', " Duplicate phone number");
                return back()->withInput();
            }
            if ($validator->errors()->has('email')) {
                Alert::error('Sorry! ', " Duplicate email number");
                return back()->withInput();
            }
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/applicant/cv/');
            $image->move($destinationPath, $image_name);
            $request->request->add(['cv' => '/uploads/applicant/cv/' . $image_name]);

        }
        //return $request->all();

        try {
            $request['password'] = Hash::make("123456");
            $applicantArray = [
                'name' => $request['name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'password' => $request['password'],
            ];

            $applicantId = Applicant::insertGetId($applicantArray);
            $applyArray = [
                'job_id' => $request['job_id'],
                'applicant_id' => $applicantId,
                'cv' => $request['cv'],
            ];
            try {
                JobApply::create($applyArray);
            } catch (\Exception $exception) {

                Alert::error('Data Insert Failed! ', $exception->getMessage());
                return back();
            }
            //return "ok";
            // Auth::guard('applicant')->loginUsingId($applicantId);
            Alert::success('Application! ', "Successfully Submit");
            return back();
        } catch (\Exception $exception) {
            Alert::error('Application Failed! ', $exception->getMessage());
            return back();
        }
    }

    public function dropCV(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',

            /*'phone' => 'required|unique:applicants',
            'email' => 'required|unique:applicants',*/
            'image' => 'required|mimes:pdf',
        ]);
        if ($validator->fails()) {
            if ($validator->errors()->has('phone')) {
                Alert::error('Sorry! ', " Duplicate phone number");
                return back()->withInput();
            }
            if ($validator->errors()->has('email')) {
                Alert::error('Sorry! ', " Duplicate email number");
                return back()->withInput();
            }
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/dropBox/cv/');
            $image->move($destinationPath, $image_name);
            $request->request->add(['cv' => '/uploads/dropBox/cv/' . $image_name]);

        }
        //return $request->all();

        try {
            $request['password'] = Hash::make("123456");
            $dropBoxArray = [
                'name' => $request['name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'password' => $request['password'],
                'cv' => $request['cv'],
            ];
            try {
                Dropbox::create($dropBoxArray);
            } catch (\Exception $exception) {

                Alert::error('Data Insert Failed! ', $exception->getMessage());
                return back();
            }
            //return "ok";
            // Auth::guard('applicant')->loginUsingId($applicantId);
            Alert::success('DropBox! ', "Your CV Successfully Drop");
            return back();
        } catch (\Exception $exception) {
            Alert::error('DropBox Failed! ', $exception->getMessage());
            return back();
        }
    }

    public function logout()
    {
        Auth::guard('applicant')->logout();
        Alert::success('Successfully Logout! ');
        return \redirect('/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
