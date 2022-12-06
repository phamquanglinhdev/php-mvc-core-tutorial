<?php

class m_grade
{
    public static function getAll()
    {

    }

    public static function logs($id)
    {
        include "m_log.php";
        return m_log::findByGradeId($id);
    }

    public static function showById($id)
    {
        $data = null;
        include "database.php";
        $conn = database::connect();
        $sql = "SELECT * FROM grades where id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->name = $row["name"];
                $item->pricing = $row["pricing"];
                $item->minutes = $row["minutes"];
                $item->logs = m_grade::logs($id);
                $data = $item;
            }
            return $data;
        } else {
            return null;
        }
    }
}
