<?php

namespace App\Http\Controllers;


use App\Models\Gallery;
use App\Models\News;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use niklasravnsborg\LaravelPdf\Facades\Pdf;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function profile()
    {
        return view('common.membership.profile');
    }


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('pages.home');
    }

    public function careerBoard(){
        return view('pages.career.show');
    }

    public function careerDetails(){
        return view('pages.career.show-details');
    }

    public function sisterConcern(){
        return view('pages.sister-concern');
    }

    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }

    public function termsOfUse(){
        return view('pages.terms-of-use');
    }

}
