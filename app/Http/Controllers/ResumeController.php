<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ResumeController extends Controller
{
    function resume(Request $request){
        return view('pages.resume');
    }


    function resumelink(Request $request){
        return DB::table('resumes')->first();
    }

    function experiencedata(Request $request){
        return DB::table('experiences')->get();
    }

    function educationdata(Request $request){
        return DB::table('educations')->get();
    }

    function skillsdata(Request $request){
        return DB::table('skills')->get();
    }

    function languagesdata(Request $request){
        return DB::table('languages')->get();
    }

}
