<?php
include "models/database/database.php";
class  m_category
{
    public static function index()
    {
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM category ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->name = $row["name"];
                $data[] = $item;
            }
            return $data;
        } else {
            return null;
        }
    }
}
