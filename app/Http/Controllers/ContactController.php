<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    function contacts(Request $request){
        return view('pages.contact');
    }

    function contactdata(Request $request){
        return DB::table('contacts')->insert($request->input());

    }
}
