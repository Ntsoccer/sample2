<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Validator;

class LoginController extends Controller
{
    //
    public function index()
    {
      return view('login');
    }
}