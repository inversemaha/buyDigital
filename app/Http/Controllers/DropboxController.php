<?php

namespace App\Http\Controllers;

use App\Models\Dropbox;
use App\Models\JobApply;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DropboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $results= Dropbox::get();

        return view("admin.dropBox.show")->with("results", $results);
    }

    public function dropBoxStatusUpdate($id,$status)
    {
        // return "ok";
        try {
            Dropbox::where('id', $id)->update([
                'status'=> $status
            ]);
            Alert::success('Applicant Status ! ', " Successfully Updated ");
            return back();
        } catch (Exception $exception) {
            Alert::error('Sorry! ', $exception->getMessage());
            return back();
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dropbox  $dropbox
     * @return \Illuminate\Http\Response
     */
    public function show(Dropbox $dropbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dropbox  $dropbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Dropbox $dropbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dropbox  $dropbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dropbox $dropbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dropbox  $dropbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dropbox $dropbox)
    {
        //
    }
}
