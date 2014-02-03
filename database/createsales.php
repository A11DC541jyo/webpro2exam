<?php
$con=mysqli_connect("127.0.0.1","root","1","webpro2examdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


   $sql=  "CREATE TABLE  Sales(id integer primary key AUTO_INCREMENT,product_id INT,sales_at DATETIME,quantity INT) ";

 
// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);

  }


?> 