<?php
$con=mysqli_connect("127.0.0.1","root","1","webpro2examdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }





    $sql = "INSERT INTO products (id, name, price) VALUES
    (1, 'ふとんクリーナー', 28800),
    (2, 'ダイソンコードレスクリーナー', 47610),
    (3, 'ロボット掃除機', 51500),
    (4, 'ブラザーコンピュータミシン', 18900),
    (5, '毛玉取り器', 2480),
    (6, 'ふとん専用ダニクリーナー', 17800),
    (7, '全自動洗濯機', 55000),
    (8, 'コードレスアイロン', 5980)";

if (mysqli_query($con,$sql))
  {
  echo "INSERT successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);

  }


?> 