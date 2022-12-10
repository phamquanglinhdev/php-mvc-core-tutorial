<?php

class AuthController
{
    public static function acceptLogin($email, $password)
    {
        include "../../models/m_user.php";
        $user = m_user::getUserByEmail($email);
        if ($user == null) {
            return false;
        }
        if ($password != $user->password) {
            return false;
        }
        $_SESSION["login"] = true;
        return true;
    }
}
