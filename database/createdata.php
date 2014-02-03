<?php
$con=mysqli_connect("127.0.0.1","root","1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE webpro2examdb DEFAULT CHARACTER SET utf8";
if (mysqli_query($con,$sql))
  {
  echo "Database webpro2examdb created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
?> 