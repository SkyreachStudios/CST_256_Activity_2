<?php


namespace App\Services\Data;


use PDO;
use PDOException;

class OrderDAO
{
    public static function createOrder($first,$last,$product){
        $servername = "localhost";
        $username1 = "root";
        $password1 = "root";
        $port="3306";



        try {
            $conn = new PDO("mysql:host=$servername;dbname=activity2", $username1, $password1);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $getIdStmt = "SELECT ID FROM customer WHERE First_Name LIKE '$first' AND Last_name LIKE '$last'";
            $result= $conn->query($getIdStmt);
            $id=$result->fetch();


            //echo "Connected successfully";
            $stmt = "INSERT INTO `order`( Product, Customer_Id) VALUES ('$product','$id[0]')";
            $conn->query($stmt);


            echo "Customer was added to the table! <br>";
            return true;

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();

        }
    }



}
