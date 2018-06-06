<?php
require_once "php/connect.php";
if(!$link)
{
    echo "连接失败";
}
$id=$_GET['id'];
mysqli_set_charset($link,"utf8");
$sql="select * from cart WHERE  id=$id";
$result=mysqli_query($link,$sql);
$re=mysqli_fetch_row($result);




    ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>优宠乐园.购物车</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css"type="text/css" media="all" >
    <link rel="stylesheet" href="css/My%20Cart.css"type="text/css" media="all" >
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-3.2.0/bootstrap-3.2.0/dist/css/bootstrap.min.css">

    <style type="text/css">
        #cssmenu ul li{
            list-style: none;

        }
        #cssmenu ul li a{
            text-decoration: none;
        }
        body{
            margin: 0;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="header-bottom">
        <div class="wrap">
            <div id="cssmenu">
                <ul>
                    <li><a href="index.php"><span>HOME</span></a></li>
                    <li><a href="about.php"><span>PET SHOP</span></a>
                        <ul>
                            <li class="has-sub"><a href="about.php"><span>Pet Shop</span></a></li>
                            <li class="has-sub"><a href="My%20Cart.php"><span>My Cart</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub active"><a href="services.php"><span>PICTURE</span></a>
                        <ul>
                            <li class="has-sub"><a href="services.php"><span>picture</span></a></li>
                            <li class="has-sub"><a href="#"><span>My Cart</span></a></li>
                        </ul>
                    </li>
                    <li class="last"><a href="contact.php"><span>CONTACT</span></a></li>
                    <li class="last">
                        <?php
                        if(!isset($_COOKIE['username']))
                            echo "<a href=\"login.php\" target=\"_blank\"><span>LOGIN</span> </a>";
                        else
                            echo "<a href='#'><span>欢迎您 ^_^ ".$_COOKIE['username']."</span></a>
                                            <ul>
                                                 <li class=\"has-sub\"><a href=\"#\"><span>账号设置</span></a></li>
                                                 <li class=\"has-sub\" id='rest'><a href=\"php/login.php?act=logout\"><span>退出账号</span></a></li>
                                             </ul>";
                        ?>

                    </li>

                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="content">
    <div class="topic">
        <div class="topic_arc"><h1>优宠乐园购物车</h1> <h4>lamdyw.cn</h4></div>
        <hr>
    </div>
      <div class="ShopList">
          <ul class="list-group">
<!--              <li class="list-group-item">-->
<!--                  <div class="list">-->
<!--                      <input type="checkbox">-->
<!--                      <img src="--><?php //echo $re[1];?><!--" alt="">-->
<!--                        <p>--><?php //echo $re[2];?><!--</p>-->
<!--                      <h4>价格--><?php //echo $re[3]?><!--</h4>-->
<!--                      <a href="#">删除</a>-->
<!--                  </div>-->
<!---->
<!--              </li>-->
              <?php
              $innerHTML="
               <li class=\"list-group-item\">
                  <div class=\"list\">
                      <input type=\"checkbox\" value='$re[3]'>
                      <img src=\"$re[1]\" alt=\"\">
                        <p> $re[2]</p>
                      <h4>价格￥$re[3]</h4>
                      <a href=\"#\" id='delect'>删除</a>
                  </div>
              </li>";
              echo $innerHTML;
              ?>

          </ul>

      </div>
    <div class="money">
        <form action="price.php?price=<?php echo $re[3]?>" method="post">
            <input type="submit" id="submit" value="支付">
        </form>
    </div>
</div>



<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script src="js/cart.js">
</script>
</body>
</html>



