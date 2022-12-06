<?php

class database
{
    public static function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "laravel";

// Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        mysqli_set_charset($conn,"utf8mb4");
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}

?>
