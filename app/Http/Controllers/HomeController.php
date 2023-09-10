<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index(Request $request){
        return view('pages.index');
    }

    function herodata(Request $request){
       return DB::table('heroproperties')->first();
    }

    function aboutdata(Request $request){
        return DB::table('abouts')->first();

    }

    function socialdata(Request $request){
        return DB::table('socials')->first();
    }



}
