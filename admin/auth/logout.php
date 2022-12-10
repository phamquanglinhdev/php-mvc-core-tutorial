<?php
session_start();
session_abort();
header("Location:http://localhost/php/admin/auth/login.php");
