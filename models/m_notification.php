<?php

include "database.php";

class m_notification
{
    public  static function getAll()
    {
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM notifications limit 3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->title = $row["title"];
                $item->message = $row["message"];
                $item->link = $row["link"];
                $data[] = $item;
            }
            return $data;
        } else {
            return null;
        }
    }
}
