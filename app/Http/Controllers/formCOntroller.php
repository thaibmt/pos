<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class formCOntroller extends Controller
{
	public function getForm()
	{
		return view('pages_food.form');
	}
    public function postForm1(Request $request)
    {
    	/*dd($request);*/
        echo $request->Code;
    }
}