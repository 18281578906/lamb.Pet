<?php
require_once "php/connect.php";
if(!$link)
{
    echo "连接失败";
}
mysqli_set_charset($link,"utf8");
$id=$_GET['id'];
$sql="select * from cart where id=$id";
$result=mysqli_query($link,$sql);
$re=mysqli_fetch_row($result);
?>


<!DOCTYPE HTML>
<html>
<head>
    <title>优宠乐园.shop_detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css"type="text/css" media="all" >
    <link href="css/details.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
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
    <div class="wrap">
        <div class="header-top">
            <div class="logo">
                <a href="index.php"><img src="img/56724f653a07a_1024.jpg" alt=""/></a>
            </div>
            <div class="phone">
                <span class="order">Contact us:</span><br>
                <h5 class="ph-no">+18281578906</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap">
            <div id="cssmenu">
                <ul>
                    <li><a href="index.php"><span>HOME</span></a></li>
                    <li class="active"><a href="about.php"><span>PET SHOP</span></a>
                        <ul>
                            <li class="has-sub"><a href="about.php"><span>pet shop</span></a></li>
                            <li class="has-sub"><a href="My%20Cart.php"><span>my cart</span></a></li>
                        </ul></li>
                    <li class="has-sub"><a href="services.php"><span>PICTURE</span></a>
                        <ul>
                            <li class="has-sub"><a href="services.php"><span>Picture</span></a></li>
                            <li class="has-sub"><a href="My%20Cart.php"><span>My Cart</span></a></li>
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
<div class="about-block">
    <div class="block">
        <h1 style="    font-size: 40px;">Pet Shop Details</h1>
        <div class="block-one">
            <div class="one-first">
                <div class="first_h"><h3 style="font-size: 25px">Featured pets</h3></div>
                <div class="first_pets" id="first_pets">
                    <div class="img" id="img"><a href="">

                            <img src="<?php echo $re[1]?>" alt=""></a></div>
<!--                    <script src="js/details.js"></script>-->
<!--                    <script type="text/javascript">-->
<!---->
<!--                       first()-->
<!---->
<!--                    </script>-->
                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation. <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation. <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 300px;"><i><?php echo $re[3];?> RMB</i><a href="My%20Cart.php?id=<?php echo $id?>">Put into my cart<i class="fa fa-cart-plus" style="  font-size: 30px;color: #00CC00"></i></a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
          <h2>Pet Shop</h2>
         <p>lamdyw.cn</p>
    </div>
</div>
<script src="js/jquery-3.2.1%20(2).js"></script>

</body>
</html>



