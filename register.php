<!DOCTYPE HTML>
<html>
<head>
    <title>优宠乐园.register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css"type="text/css" media="all" >
    <link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
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
                            <li class="has-sub"><a href=#"><span>My Cart</span></a></li>
                        </ul>
                    </li>
                    <li class="last"><a href="contact.php"><span>CONTACT</span></a>
                       </li>
                    <li class="last active"><a href="login.php"><span>REGISTER</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>
<div class="about-block" style="display: block">
    <div class="block">
        <form action="php/register2.php" method="post" enctype="application/x-www-form-urlencoded">
        <ul>
            <li>
                <label class="label">Username:</label>
                <input type="text" name="text" id="text"/></li>
            <li>
                <label class="label">Password: </label>
                <input type="password" name="password" id="pass"/></li>
            <li>
                <label class="label">ComfirmP:</label>
                <input type="password" name="password2" id="comfirm" style="width: 70%;height: 23px;"/></li>


            <li>
                <div class="input_foot">
                <div class="register"><input type="checkbox" value="1"/>同意并注册</div>
                <div class="findpass"><a href="login.php">已有账号</a></div>
                </div>
               </li>
            <li>
                <a href="login.php"><input type="submit" name="submit" value="register" id="submit"/></a></li>
            <li>
                <div class="footer">
                    <ul id="footer_ul">
                        <li><a href=""><i class="fa fa-qq fa-2x"></i></a></li>
                        <li><a href=""><i class="fa fa-weixin fa-2x"></i></a></li>
                        <li><a href=""><i class="fa fa-weibo fa-2x"></i></a></li>
                    </ul>
                </div>
            </li>
        </ul>
        </form>
    </div>
</div>
<div class="message" >
    <p>用户名不能为空</p>
</div>
<script type="text/javascript" src="js/jquery-3.2.1%20(2).js"></script>
<script src="js/register.js"></script>
</body>
</html>



