<?php
session_start();
$email = "";
$password = "";
if (isset($_REQUEST["email"]) && isset($_REQUEST["password"])) {
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
}
include "../../Controllers/Auth/AuthController.php";
if (AuthController::acceptLogin($email, $password)) {
    header("Location:http://localhost/php/admin");
} else {
    echo "Đăng nhập thất bại";
//    header("Location:http://localhost/php/admin/auth/login.php");
}
