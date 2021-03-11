<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRegister;
use Validator;

class RegisterController extends Controller
{
    //
    public function index(){
      return view('register');
    }

    public function post(StoreRegister $request)
    { 
      $data=$request->all();  
      return view('home',compact('data'));
    }
}