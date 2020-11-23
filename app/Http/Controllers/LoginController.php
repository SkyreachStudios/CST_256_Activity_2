<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\SecurityService;

class LoginController extends Controller
{
    public function index(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $user = new UserModel($password,$username);
        $service = new SecurityService;




        $data = ['username' => $username, 'password' => $password];

        if(SecurityService::login($user)){
            return view("loginPassed2")->with($data);
        }
        else{
            return view("loginFailed");
        }

    }


}
