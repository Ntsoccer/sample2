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

    public function post(Request $request)
    {
      $data=$request->all();
      $rules=[
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:7',
        'password-confirm'=>'required|same:password',
      ];
      $messages=[
        'name.required'=>'名前は必須です。',
        'email.required'=>'メールアドレスは必須です。',
        'password.required'=>'パスワードは必須です。',
        'password.min'=>'パスワードは７文字以上でお願いします。',
        'password-confirm.same'=>'パスワードが異なっています。',
      ];
      $validator=Validator::make($request->all(),$rules,$messages);
      if($validator->fails()){
        return redirect('register')
        ->withErrors($validator)
        ->withInput();
      }else{
        return view('home',compact('data'));
      }
      return view('register');
    }
}