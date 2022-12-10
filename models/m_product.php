<?php

include "models/database/database.php";

class m_product
{
    public static function getAll()
    {
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM product ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->name = $row["name"];
                $item->title = $row["title"];
                $item->thumbnail = $row["thumbnail"];
                $item->description = $row["description"];
                $item->price = $row["price"];
                $data[] = $item;
            }
            return $data;
        } else {
            return null;
        }

    }
}
