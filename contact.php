<!DOCTYPE HTML>
<html>
<head>
    <title>优宠乐园.Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css"type="text/css" media="all" >
    <link href="css/about.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/contact.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/bootstrap-3.2.0/bootstrap-3.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <style type="text/css">
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
                            <li class="has-sub"><a href="#"><span>My Cart</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="services.php"><span>PICTURE</span></a>
                        <ul>
                            <li class="has-sub"><a href="services.php"><span>Picture</span></a></li>
                            <li class="has-sub"><a href="My%20Cart.php"><span>My Cart</span></a></li>
                        </ul>
                    </li>
                    <li class="last active"><a href="contact.php"><span>CONTACT</span></a></li>
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
<div class="about-block" style="display: block">
    <div class="block">
        <h1>Contact Us</h1>
        <div class="block-one">

            <div class="one-first">
                <h2>Contact Us</h2>
                <p>  Morbi rutrum massa eget mi gravida,
                    sit amet mollis magna gravida. Morbi sodales, ligula quis ornare bibendum, magna erat convallis ipsum, id posuere ligula massa vitae leo.</p>
                <p>  Morbi rutrum massa eget mi gravida,
                    sit amet mollis magna gravida. Morbi sodales,
                    ligula quis ornare bibendum, magna erat convallis ipsum, id posuere ligula massa vitae leo.</p>
            </div>
            <div class="one-seecond">
                <ul>
                    <li><span class="glyphicon glyphicon-envelope"></span>Email:<a href="">1454040353@qq.com</a></li>
                    <li><span class="glyphicon glyphicon-phone"></span>Phone:<a href="">18281578906</a></li>
                    <li><span class="glyphicon glyphicon-phone"></span>Fax:<a href="">(87)+2792924</a></li>
                    <li><span class="glyphicon glyphicon-home"></span>Address:<a href="">Neusoft.School</a></li>
                </ul>
            </div>
        </div>
        <div class="block-two">
            <form action="php/message.php" method="post" enctype="application/x-www-form-urlencoded">
                <ul>
                    <li><input type="text" name="text" placeholder="Name"></li>
                    <li><input type="email" name="email" placeholder="Email"></li>
                    <li><input type="text" name="message" placeholder="Message"></li>
                    <li><input type="submit" value="Send Message" name="submit"></li>
                </ul>
            </form>

        </div>
        <div class="block_four" id="four">
            <ul id="ul_first">
                <li><a href="https://weibo.com/6249680171/profile?rightmod=1&wvr=6&mod=personinfo&is_all=1"><i class="fa fa-weibo fa-2x"></i></a></li>
                <li><a href=""><i class="fa fa-weixin fa-2x"></i></a></li>
                <li><a href="http://wpa.qq.com/msgrd?v=3&uin=1454040353&site=qq&menu=yes"><i class="fa fa-qq fa-2x"></i></a></li>
                <li><a href="mailto:1454040353.qq.com"><i class="fa fa-envelope fa-2x"></i></a></li>
            </ul>
            <ul id="ul_second">
                <li><a href="#">友情链接：</a></li>
                <li><a href="#">优宠社区论坛</a></li>
                <li><a href="#">优宠社区博客</a></li>
                <li><a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2Fzhidao.baidu.com%2Fquestion%2F1947146184407461868%3Fsharesource%3Dqzone&amp;title=%E5%9C%A8Java%E4%B8%AD%E5%A6%82%E4%BD%95%E9%80%9A%E8%BF%87%E5%9C%A8%E6%95%B0%E6%8D%AE%E5%BA%93%E5%BE%97%E5%88%B0%E7%9A%84%E7%BB%93%E6%9E%9C%E9%9B%86%E5%BE%97%E5%88%B0%E8%A1%A8%E7%9A%84%E5%88%97%E6%95%B0%E5%92%8C%E8%A1%8C%E6%95%B0_%E7%99%BE%E5%BA%A6%E7%9F%A5%E9%81%93&amp;pics=https%3A%2F%2Fgss0.bdstatic.com%2F70cFsjip0QIZ8tyhnq%2Fimg%2Fiknow%2Fzhidaologo.png" target="_blank">分享到QQ空间 <i class="fa fa-share-alt-square"></i></a></li>
                <li><a href="#">我的客服</a></li>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">聊天室</a></li>
            </ul>
            <ul id="ul_third">
                <li><p>@2018 优宠乐园</p></li>
                <li><a href="#">使用前必读</a><a href="#">意见反馈</a></li>
                <li><p>川ICP证1245696号</p></li>
                <li><a href="http://www.028icp.com/">四川公网安备01200000120301号</a></li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>

</body>

</html>



