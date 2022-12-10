<?php

class m_user
{
    public static function getUserByEmail($email)
    {
        include "../../models/database/database.php";
        $data = null;
        $conn = database::connect();
        $sql = "SELECT * FROM users where email = '$email'";
        $result = $conn->query($sql);
//        if (!$result) {
//            return false;
//        }
        var_dump($result);
        echo $sql;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->name = $row["name"];
                $item->email = $row["email"];
                $item->password = $row["password"];
                $item->remember = $row["remember"];
                $data = $item;
            }
            return $data;
        } else {
            return null;
        }
    }
}
