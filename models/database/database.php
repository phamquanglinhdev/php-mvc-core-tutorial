<?php


class database
{
    public static function connect()
    {
        $hostname = "localhost";
        $user = "root";
        $database = "vudinhdo";
        $password = "";
        $conn = mysqli_connect($hostname, $user, $password, $database);
        mysqli_set_charset($conn, "utf8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
