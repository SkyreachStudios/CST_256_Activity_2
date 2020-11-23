<?php

namespace App\Http\Controllers;

use App\Services\Business\OrderService;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\SecurityService;

class customerController extends Controller
{
    public function addCustomer()
    {
        $first = "Regina";
        $last = "Blake";
        OrderService::addCustomer($first,$last);


    }

    public function addOrder(){
        $first = "Crystal";
        $last = "Sciarrino";
        $product = "Samsung Galaxy Tab 5";

        OrderService::addCustomer($first,$last);

    }

    public function order(){
        $first = "Marina";
        $last = "Riven";
        $product = "Samsung Galaxy Tab 5";

        OrderService::addCustomer($first,$last);
        OrderService::addOrder($first,$last,$product);

    }





}
