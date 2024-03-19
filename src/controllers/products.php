<?php

class Products
{
    public function index(): void
    {
        require 'src/models/product.php';
        $model = new Product();
        $products = $model->getData();
        require 'views/products_index.php';
    }

    public function show(): void
    {
        require 'src/models/product.php';
        require 'views/products_show.php';
    }
}