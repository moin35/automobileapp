<?php

namespace App\Http\Controllers;

use App\Verification;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getlogin(){
    if(Auth::check())
            {
        return Redirect::to('dashboard');
            }
    else
            {
        return view('login');
            }  
    
    }
    public function postLogin(){
        $email = Input::get('email');
        $pass =Input::get('pass');
       
        if (Auth::attempt(['email' => $email, 'password' => $pass]) && $email != '' && $pass != '')
            {
                 //return 1;
        return Redirect::to('dashboard');
            }
        else{
          Session::flash('data','Login Failed! Please check your credentials.');
             return redirect('login');
            }
        }
        public function logout(){
        Auth::logout();
        return Redirect::to('login');
    }
  public function index(){
        if(Auth::check())
        {
            return view('dashboard.superadmin');
        }
        else
        {
            return 'not logged in!';
        }
    }
}
