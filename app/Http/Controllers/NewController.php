<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function index(){

        return view('new');


    }
    public function input(Request $request){
        //dd($request->all());
        $request->validate([
            'longUrl' => 'required',
        ]);
        $URL = new URL;
        $URL->longurl = $request->get('longUrl');
        $URL->save();

        return redirect('/new');
    }
}
