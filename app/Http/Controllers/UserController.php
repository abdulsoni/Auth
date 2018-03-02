<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','getExchange'
            ,'getAbout','getPrivacy','news','getHome','getContact','getVerification',
            'responsible','sendMail','getSafety','getPress','getPartner','getOver','getApi'
            ,'getPrivacy','getTerms','jobsOne','jobs','getFaq','Result']]);
    }

    public function Adminlogout(){
//        return 0;
        Auth::logout();
        return redirect('/');
    }
    public function getBack(){
        return 0;
    }
    public function index(){
        if(Auth::check() && Auth::user()->isAdmin()){

            return view('admin/dashboard');
        }
        else{
            return redirect('/login');
        }
    }
    public function getHome(){
//          return 0;
       return view('user.index');
}
//public function getBack()
//{
//    Auth::logout();
//    return redirect('/');
//}
}
