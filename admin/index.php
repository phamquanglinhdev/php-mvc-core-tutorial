<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:http://localhost/php/admin/auth/login.php");

}

include("../admin/model/header.php");
include("../admin/model/menu.php");
include("../admin/model/footer.php");
?>
<a href="http://localhost/php/admin/auth/logout.php">Đăng xuất</a>
