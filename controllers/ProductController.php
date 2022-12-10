<?php

class ProductController
{
    public static function index()
    {
        require "models/m_product.php";
        $products = m_product::getAll();
        if ($products != null) {
            include "views/clients/products/product.php";
        }
    }

    public function show_product()
    {
        echo __METHOD__;
    }
}