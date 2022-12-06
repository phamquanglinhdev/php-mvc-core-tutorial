<?php

class m_log
{
    public static function findByGradeId($id)
    {
        $data = [];
        $conn = database::connect();
        $sql = "SELECT * FROM logs where grade_id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $item = new stdClass();
                $item->id = $row["id"];
                $item->lesson = $row["lesson"];
                $item->information = $row["information"];
                $item->question = $row["question"];
                $data[] = $item;
            }
            return $data;
        } else {
            return null;
        }
    }
}
