<!DOCTYPE HTML>
<html>
<head>
    <title>优宠乐园.PetShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css"type="text/css" media="all" >
    <link href="css/about.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap-3.2.0/bootstrap-3.2.0/dist/css/bootstrap.min.css">
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
<div class="about-block">
    <div class="block">
        <h1>Welcome To Pet Shop</h1>
        <div class="block-one">
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic10.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=1" id="first">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/peng.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=2" id="second" onclick="second()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets food</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/tooth.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=3" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-two">
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/dogfood.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=4" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic19.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=5" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets food</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic17.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=6" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-one">
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic10.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=1" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/peng.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=2" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets food</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/tooth.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=3" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-two">
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/dogfood.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=4" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic19.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=5" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets food</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic17.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=6" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-one">
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic10.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=1" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/peng.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=2" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets food</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/tooth.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=3" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-two">
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/dogfood.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=4" id="first" onclick="first()"- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic19.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=5" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets food</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic17.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=6" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-one">
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic10.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=1" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/peng.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=2" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets food</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/tooth.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=3" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-two">
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/dogfood.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=4" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic19.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=5" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="one-first">
                <div class="first_h"><h3>Featured pets food</h3></div>

                <div class="first_pets">
                    <div class="img"><a href=""><img src="images/pic17.jpg" alt=""></a></div>

                    <div class="first_border">
                        <p>
                            <span>Product name</span>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            <br>
                            <span style="margin-left: 100px;"><a href="shop_detail.php?id=6" id="first" onclick="first()">- more details -</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="about-one">
           <div class="one-img"><img src="images/bullet1.gif" alt="">
               <h3>New Pets</h3>
           </div>
            <div class="one-pet">
                <ul>
                    <li><a href=""><p>Product name</p><img src="images/thumb1.gif" alt=""></a></li>
                    <li><a href=""><p>Product name</p><img src="images/thumb2.gif" alt=""></a></li>
                    <li><a href=""><p>Product name</p><img src="images/thumb3.gif" alt=""></a></li>
                </ul> <ul>
                    <li><a href=""><p>Product name</p><img src="images/thumb1.gif" alt=""></a></li>
                    <li><a href=""><p>Product name</p><img src="images/thumb2.gif" alt=""></a></li>
                    <li><a href=""><p>Product name</p><img src="images/thumb3.gif" alt=""></a></li>
                </ul> <ul>
                    <li><a href=""><p>Product name</p><img src="images/thumb1.gif" alt=""></a></li>
                    <li><a href=""><p>Product name</p><img src="images/thumb2.gif" alt=""></a></li>
                    <li><a href=""><p>Product name</p><img src="images/thumb3.gif" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="about-two">

             <div class="about-us">
                 <div class="us-title">
                     <img src="images/bullet2.gif" alt="">
                     <h3>About Our Shop</h3>
                 </div>
                 <div class="us-passage">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud.</p>
                     <div class="us-img">
                     <img src="images/about.gif" alt="about our shop">
                     </div>
                </div>
                 <div class="us-border">
                     <div class="border-img">
                         <img src="images/border.gif" alt="">
                     </div>
                 </div>
             </div>
            <div class="about-list">
             <div class="list-ul">
                 <ul>
                    <li><a href=""><img src="images/bullet5.gif" alt="">
                            <h3>Categories</h3></a></li>
                    <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>accesories</p></a></li>
                    <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>pets gifts</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>specials</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>hollidays gifts</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>accesories</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>pets gifts</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p> specials</p></a></li>
                </ul></div>
             <div class="list-ul">
                 <ul>
                    <li><a href=""><img src="images/bullet5.gif" alt="">
                            <h3>Categories</h3></a></li>
                    <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>accesories</p></a></li>
                    <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>pets gifts</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>specials</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>hollidays gifts</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>accesories</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p>pets gifts</p></a></li>
                     <li><a href=""><img src="images/catfoot.gif" alt="">
                            <p> specials</p></a></li>
                </ul></div>
<!--                <div class="list-right">-->
<!--                    <div class="right-ul">-->
<!--                        <ul>-->
<!--                            <li><a href="">-->
<!--                                    <p>product name</p>-->
<!--                                    <img src="images/thumb1.gif" alt=""></a></li>-->
<!--                            <li><a href="">-->
<!--                                    <p>product name</p>-->
<!--                                    <img src="images/thumb2.gif" alt=""></a></li>-->
<!--                            <li><a href="">-->
<!--                                    <p>product name</p>-->
<!--                                    <img src="images/thumb3.gif" alt=""></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="us-border">
                    <div class="border-img">
                        <img src="images/border.gif" alt="">
                    </div>
                </div>
            </div>
            <div class="about-cart">
                <div class="cart-title">
                    <img src="images/cart.gif" alt="">
                    <h3>My Cart</h3>
                    <div class="cart-input">
                        <input type="text" placeholder="3 shops | total:100$">
                        <a href="#">view my cart</a>
                    </div>
                </div>
                <div class="us-border">
                    <div class="border-img">
                        <img src="images/border.gif" alt="">
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
<script src="js/details.js"></script>
</body>
</html>



