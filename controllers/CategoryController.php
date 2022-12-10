<?php

class CategoryController
{
    public static function index()
    {
        require "models/m_category.php";
        $categories = m_category::index();
        if ($categories != null) {
            include "views/clients/categories/categories.php";
        }
    }
}