<html>
<head>
<meta charset="UTF-8">

    <title>購入</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
         
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

      <h1>商品詳細</h1>

      <p>購入数を入力して、購入ボタンを押してください。</p>
<ul>

<?php 

while ($row = $products->fetch(PDO::FETCH_ASSOC)) {
   echo "<b>商品名</b>:  ".$row['name']."</p>";
   echo "<b> 価格</b>:   ".$row['price']."円";	
 }
 ?>

<form action="../Sales/create" method="post">

<p><input  type="hidden" name="sales_at" value="<?php echo date('Y-m-d-H-i'); ?>"  name="sales_at" id="sales_at" class="input-block-level">
<p><input  type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>"  name="product_id" id="product_id" class="input-block-level">
<p><b>購入数: </b><input type="text"  name="quantity" id="quantity" value="0" class="input-block-level">
<p><button type="submit" class="btn btn-primary">購入する</button>
 </form>
    
</ul>

 </div>
</body>
</html>