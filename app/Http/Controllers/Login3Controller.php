<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\SecurityService;

class Login3Controller extends Controller
{
    public function index(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $this->validateForm($request);

        $user = new UserModel($password, $username);
        $service = new SecurityService;


        $data = ['username' => $username, 'password' => $password];

        if (SecurityService::login($user)) {
            return view("loginPassed2")->with($data);
        } else {
            return view("loginFailed");
        }
    }

        private function validateForm(Request $request)
    {
        // Setup Data Validation Rules for Login Form
        $rules = ['username' => 'Required | Between:4,10 | Alpha',
            'password' => 'Required | Between:4,10'];

        // Run Data Validation Rules
        $this->validate($request, $rules);
    }



}
