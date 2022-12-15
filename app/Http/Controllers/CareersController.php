<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results= JobPost::orderBy('id', 'DESC')->get();


        return view("admin.careers.show")->with("results", $results);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'details' => 'required',
            'last_apply_date' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Sorry! ', " Required field is empty");
            return back()->withInput();
        }
         //return $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/career/');
            $image->move($destinationPath, $image_name);
            $request->request->add(['featured_image' => '/uploads/career/' . $image_name]);

        }

       // $request['author_id']= Auth::user()->id;

        try {
            JobPost::create($request->except('_token','image'));
            Alert::success('Congratulations! ', "Job post is Created");
            return back()->withInput();
        } catch (\Exception $exception) {
            Alert::error('Sorry! ', $exception->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    /*public function show(JobPost $jobPost)
    {
        $jobPost= JobPost::all();
        return  view('admin.careers.show')->with('careers',$jobPost );
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/career/');
            $image->move($destinationPath, $image_name);
            $request->request->add(['featured_image' => '/uploads/career/' . $image_name]);

        }

        /*  $request['author_id']= Auth::user()->id;*/

        try {
            JobPost::where('id', $id)->update($request->except('_token', 'image','_method'));
            Alert::success('Congratulations! ', "Job post data Updated");
            return back()->withInput();
        } catch (\Exception $exception) {
            Alert::error('Sorry! ', $exception->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        try {
            JobPost::where('id', $id)->delete();
            Alert::success('Congratulations! ', "Your Job data Deleted");
            return back()->withInput();
        } catch (\Exception $exception) {
            Alert::error('Sorry! ', $exception->getMessage());
            return back();
        }
    }
}
