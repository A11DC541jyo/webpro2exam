<?php
require_once 'util.php';

class Sales {

    private $id;
    private $product_id;
    private $sales_at;
    private $quantity;  
	
			  
public function all() 
 			 {
	  $result;
	  $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=webpro2examdb; charset=utf8;', 'root', '1');
	  
	 try {
   
    //  $result=$this->pdo->query("SELECT * from sales");
	 $result=$this->pdo->query("SELECT * from sales as s, products as p where s.product_id=p.id");

         }catch (PDOException $e) {
    		var_dump($e->getMessage());
     							 }
		 return $result;

  			  }
	
 public function save($product_id,$sales_at,$quantity){
	 {
		 
	 $result;
	  $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=webpro2examdb; charset=utf8;', 'root', '1');
	  
	 try {
   
    //  $result=$this->pdo->query("INSERT INTO sales ( `product_id`, `sales_at`, `quantity`) VALUES ( '" . $product_id . "', '" . $sales_at . "', '" . $quantity . "');");
	  
	    $result= $this ->pdo->prepare('INSERT INTO  sales ( `product_id`, `sales_at`, `quantity`) VALUES (:product_id,:sales_at,:quantity )');
    	$result->bindValue('product_id', $product_id);
		$result->bindValue('sales_at', $sales_at);
		$result->bindValue('quantity', $quantity);
   		$result->execute();
	  //'); DELETE FROM questions; --
	  
	  
	// $result=$this->pdo->query("INSERT INTO sales (content) VALUES ('" . $quantity . "')");
	
         }catch (PDOException $e) {
    		var_dump($e->getMessage());
     							 }
		 return $result;

  			  }
	
		}	
}