<?php


namespace App\Services\Business;


use App\Models\UserModel;
use App\Services\Data\SecurityDao;

class SecurityService
{
    public static function login(UserModel $user){
        return SecurityDao::findByUser($user);

    }

}
