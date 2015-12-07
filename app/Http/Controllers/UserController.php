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
use App\CompanyInfo;
use App\User;

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
    public function getregstation(){

         return view('reg');
    }
    public function postregstation(){

        $cid=mt_rand('1000','9999');
        $cname=Input::get('company_name');
        $cemail=Input::get('company_email');
        $cstreetaddress=Input::get('street_address');       
        $cstate=Input::get('state');
        $ccity=Input::get('city');
        $czip=Input::get('zip');
        $cphone=Input::get('phone');
        $ctext=Input::get('tax');
        $pass1=Input::get('password');
        $pass2=Input::get('c_password');
        $comadditionInformation=Input::get('company_additional_info');

       $check=User::where('email','=',$cemail)->count();
      if($check>0 )
        {

        Session::flash('data','Email already used. Please Try a different Email.');
        return redirect('reg');
 
        }
        elseif($pass1!=$pass2) {
         Session::flash('data','Your Password Not Match !!! Please Try Again.');
        return redirect('reg');
        }
        else {
            //return 1;
        $reg=new CompanyInfo;
        $reg->cid=$cid;
        $reg->company_name=$cname;
        $reg->company_email=$cemail;
        $reg->street_address=$cstreetaddress;
        $reg->city=$ccity;
        $reg->state=$cstate;
        $reg->zip=$czip;
        $reg->phone=$cphone;
        $reg->company_additional_info=$comadditionInformation;
        $reg->sales_tax=$ctext;
        $reg->save();


        $re=new User;
        $re->cid=$cid;
        $re->email=$cemail;
        $re->company_name=$cname;
        $re->privilege=2;
        $re->password=$pass2;
        $re->save();

        return Redirect::to('re');
    }

    }
}
