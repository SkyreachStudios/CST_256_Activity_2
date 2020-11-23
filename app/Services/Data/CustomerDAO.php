<?php


namespace App\Services\Data;


use PDO;
use PDOException;

class CustomerDAO
{

    public static function addCustomer($first,$last){
        $servername = "localhost";
        $username1 = "root";
        $password1 = "root";
        $port="3306";



        try {
            $conn = new PDO("mysql:host=$servername;dbname=activity2", $username1, $password1);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



            //echo "Connected successfully";
            $stmt = "INSERT INTO customer(First_Name, Last_Name) VALUES ('$first','$last')";
            $conn->query($stmt);

                echo "Customer was added to the table! <br>";

                return true;



        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();

        }
    }

}
