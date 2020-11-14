<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TestController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test(){
        return "Hello World From Test Controller!";
    }

    public function test2(){
        return view('helloworld');
    }
}
