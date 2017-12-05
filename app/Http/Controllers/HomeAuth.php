<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class HomeAuth extends Controller
{
    //

    public function register(Request $request)
    {
        if ($request ->isMethod('post')){
            print_r($request ->post());
            return 'test';
        }else{
            return view('error.404');
        }
    }


    protected function registerCheck($data)
    {
        
    }
}
