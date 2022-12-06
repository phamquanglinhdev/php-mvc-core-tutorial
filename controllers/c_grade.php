<?php

class c_grade
{
    public static function showById($id)
    {
        include "models/m_grade.php";
        $grade = m_grade::showById($id);
        include "views/v-grade.php";
    }
}
