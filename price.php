<?php
require_once "php/connect.php";
if(!$link)
    echo "链接数据库失败";
$price=$_GET['price'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>优宠乐园.支付</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/price.css">
</head>
<body>
<div class="content">
    <h1>你需要支付：<?php echo $price;?></h1>
<h1>请选择支付方式</h1>
<div class="chioce">
    <div class="zhifubao">
        <a href="">
        <img src="images/zhifubao.jpg" alt="">
        <p>支付宝支付</p></a>
    </div>
    <div class="weixin">
        <a href="">
        <img src="images/weixin.jpg" alt="">
        <p>微信支付</p></a>
    </div>
</div>
</div>
</body>
</html>



