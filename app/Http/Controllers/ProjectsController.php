<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProjectsController extends Controller
{
    function projects(Request $request){
        return view('pages.projects');
    }


    function projectdata(Request $request){
        return DB::table('projects')->get();
    }
}
