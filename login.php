<!DOCTYPE HTML>
<html>
<head>
    <title>优宠乐园.My Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css"type="text/css" media="all" >
    <link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
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
    <div class="head_span"><i class="fa fa-bars"></i></div>

    <div class="header-bottom">

        <div class="wrap">
            <div id="cssmenu">
                <ul>
                    <li><a href="index.php"><span>HOME</span></a></li>
                    <li><a href="about.php"><span>PET SHOP</span></a>
                        <ul>
                            <li class="has-sub"><a href="about.php"><span>Pet Shop</span></a></li>
                            <li class="has-sub"><a href="My%20Cart.php"><span>My Cart</span></a></li>
                        </ul></li>
                    <li class="has-sub"><a href="services.php"><span>PICTURE</span></a>
                        <ul>
                            <li class="has-sub"><a href="services.php"><span>Picture</span></a></li>
                            <li class="has-sub"><a href="#"><span>My Cart</span></a></li>
                        </ul>
                    </li>
                    <li class="last"><a href="contact.php"><span>CONTACT</span></a></li>
                    <li class="last active"><a href="login.php"><span>LOGIN</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>
<div class="about-block" style="display: block">
    <div class="block">
        <form action="php/login.php?act=login" method="post" enctype="application/x-www-form-urlencoded">
        <ul>
            <li>
                <lable class="label">UserName:</lable>
                <input type="text" name="text" id="text"></li>
            <li>
                <lable class="label">Password: </lable>
                <input type="password" name="password" id="pass"></li>
            <li>
                <input type="submit" name="submit" value="Submit" id="submit"></li>
            <li>
                <div class="input_foot">
                <div class="date"><a href="#"><input type="checkbox" value="1" name="autologin">一周后过期</a></div>
                <div class="register"><a href="register.php">注册账号</a></div>
                <div class="findpass"><a href="#">找回密码</a></div>
                </div>
               </li>
            <li>
                <div class="footer">
                    <ul id="footer_ul">
                        <li><a href="http://www.58pic.com/index.php?m=login&a=snsLogin&type=qq"><i class="fa fa-qq fa-2x"></i></a></li>
                        <li><a href=""><i class="fa fa-weixin fa-2x"></i></a></li>
                        <li><a href=""><i class="fa fa-weibo fa-2x"></i></a></li>
                    </ul>
                </div>
            </li>
        </ul>
        </form>
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
</body>
</html>



