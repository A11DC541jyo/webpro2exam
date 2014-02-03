<?php
require_once(dirname(__FILE__) . '/../models/products.php');

class ProductsController {

    public function indexAction() {
        $products = Product::all();
        require_once(dirname(__FILE__) . '/../views/products/index.php');
    }

}