<?php


namespace App\Models;


class UserModel
{
    private  $username;
    private $password;
    //constructor
    function __construct($Password,$Username){
        $this->username = $Username;
        $this->password = $Password;

    }
    //getters
    function get_username(){
        return $this->username;
    }
    function get_password(){
        return $this->password;
    }


}
