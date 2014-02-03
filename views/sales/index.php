<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">

    <title>売上一覧</title>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
             <li class="active"><a href="../Products/index">商品一覧</a></li>
            <li><a href="../Sales/index">売上一覧</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <h1>売上一覧</h1>

      <p>これまでに購入された商品の一覧です。</p>
<?php foreach ($Sales as $Sale) { ?>
  <li>  <?php 
  $sa = $Sale['quantity'];
  $r = $Sale['price'];
 // print_r($Sale);
 // echo"<br>";
  
  $total = $sa * $r;
   echo "<b>日時</b>:  ".$Sale['sales_at']."</p>";
   echo "<b>商品名</b>:  ".$Sale['name']."</p>";
  // echo "product id".$Sale['id']."";
  // echo " Sale product_id ".$Sale['product_id']."";
   echo "<b> 個数</b>:  ".$Sale['quantity']."</p>";
  // echo "<b> product_id</b>:  ".$Sale['product_id']."</p>";
	
   echo "<b> 合計（個数 * 単価）</b>: ";echo htmlspecialchars($total, ENT_QUOTES, 'UTF-8');echo "円</p>"; 
   ?>
    <?php } ?>
   
  </li>  
    </div>
  </body>
</html>