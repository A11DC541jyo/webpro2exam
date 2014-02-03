<?php
require_once(dirname(__FILE__) . '/../models/products.php');
require_once(dirname(__FILE__) . '/../models/sales.php');

class SalesController {

    public function indexAction() {
	}

    public function newAction($productId) {
		$product_record = Product::load($productId);
        require_once(dirname(__FILE__) . '/../views/sales/index.php');
	}

    public function createAction($request) {
//        echo "Buy ";
//        echo $request['quantity'];
//        echo " of ";
//        echo $request['id'];

		Sale::save($request['id'], $request['quantity']);

        $sale_history = Sale::all();
        require_once(dirname(__FILE__) . '/../views/sales/new.php');
	}
}

	