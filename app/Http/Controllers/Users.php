<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //

    public function index($n)
    {

        echo $n." "." user controller";
        //below command will return json
        //return ['name'=>$n,'age'=>'27'];
        return view('contact',['name'=>$n,'age'=>'27']);

    }
}
