<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Illuminate\Routing\Controller as BaseController;


class logController extends Controller
{
    //se connecter
    public function connecter(Request $req){

        $email=$req->input('email');
        $password=$req->input('password');

        $checklogin = DB::table('login')->where(['email'=>$email,'password'=>$password])->get();
        if(count($checklogin)>0) {
            echo "login succeful";
        } else {
            echo "there is something wrong in your email or password";
        }

        // to try if it works : echo $email."---".$password;

    }
}