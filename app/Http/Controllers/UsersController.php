<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function LoadView()
    {
        $data = ['anil','sam','peter'];
        return view('users',['u'=>$data, 'n'=>'sam']);
    }
}
