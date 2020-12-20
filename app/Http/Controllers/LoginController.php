<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
      $data=$request->all();
      return view('login');
    }
}