<?php


namespace App\Services\Data;


use App\Models\UserModel;
use PDO;

class SecurityDAO
{
    public static function findByUser(UserModel $user)
    {
        $servername = "localhost";
        $username1 = "root";
        $password1 = "root";
        $port="3306";
        $username = $user->get_username();
        $password = $user->get_password();


        try {
            $conn = new PDO("mysql:host=$servername;dbname=activity2", $username1, $password1);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            //echo "Connected successfully";
            $stmt = "SELECT * FROM users WHERE USERNAME LIKE '$username' AND PASSWORD LIKE '$password'";
            $result = $conn->query($stmt);

            if($result->rowCount() >0){
                //echo "Login Success!";
                echo "<br>";
                return true;
            }
            else{
                //echo "Wrong login data or there was an error";
                echo "<br>";
                return false;
            }


            $conn->close();

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();

        }

    }

}
