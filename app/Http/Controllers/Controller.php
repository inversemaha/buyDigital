<?php

namespace App\Http\Controllers;


use App\Models\JobApply;
use App\Models\JobPost;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use niklasravnsborg\LaravelPdf\Facades\Pdf;
use RealRashid\SweetAlert\Facades\Alert;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function profile()
    {
        return "Ok";
        return view('common.membership.profile');
    }


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        return view('pages.home');
    }

    public function careerBoard()
    {
        $result = JobPost::orderBy('id', 'DESC')->get();
        return view('pages.career.show')->with('result', $result);
    }

    public function careerDetails($id)
    {
        $results = JobPost::where('id', $id)->orderBy('id', 'DESC')->first();
        return view('pages.career.show-details')->with('results', $results);
    }

    public function sisterConcern()
    {
        return view('pages.sister-concern');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function termsOfUse()
    {
        return view('pages.terms-of-use');
    }

    public function findOutMore()
    {
        return view('pages.find-out-more');
    }

}
