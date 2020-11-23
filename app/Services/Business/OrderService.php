<?php


namespace App\Services\Business;


use App\Models\UserModel;
use App\Services\Data\CustomerDAO;
use App\Services\Data\OrderDAO;
use App\Services\Data\SecurityDao;

class OrderService
{
    public static function addCustomer($first,$last){
        return CustomerDAO::addCustomer($first,$last);

    }

    public static function addOrder($first,$last,$product){

        OrderDAO::createOrder($first,$last,$product);
    }

}
