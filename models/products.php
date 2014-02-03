<?php
 require_once 'util.php';
 
 
class Products
{
    private $id;
    private $name;
    private $price;
    private $pdo;



			  
public function all() 
 			 {
	  $result;
	  $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=webpro2examdb; charset=utf8;', 'root', '1');
	  
	 try {
   
      $result=$this->pdo->query("SELECT * from products");
	
         }catch (PDOException $e) {
    		var_dump($e->getMessage());
     							 }
		 return $result;

  			  }
			  
			  
 
	
 public function load($id){
	 {
	 $result;
	  $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=webpro2examdb; charset=utf8;', 'root', '1');
	  
	 try {
   
      $result=$this->pdo->query("SELECT * from products where id=".$id."");
	
         }catch (PDOException $e) {
    		var_dump($e->getMessage());
     							 }
		 return $result;

  			  }
	
		}


// public function load($id){
//	 {
//	 $result;
//	  $this->pdo = new PDO('mysql:host=127.0.0.1; dbname=webpro2examdb; charset=utf8;', 'root', '1');
//	  
//	 try {
//   
//      $result=$this->pdo->query("SELECT * from products where id=".$id."");
//	
//         }catch (PDOException $e) {
//    		var_dump($e->getMessage());
//     							 }
//		 return $result;
//
//  			  }
//	
//		}