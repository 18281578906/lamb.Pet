<!DOCTYPE HTML>
<html>
<head>
    <title>优宠乐园.首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/newindex.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/bootstrap-3.2.0/bootstrap-3.2.0/dist/css/bootstrap.min.css">
    <style type="text/css">
        #cssmenu ul li{
            list-style: none;

        }
        #cssmenu ul li a{
            text-decoration: none;
        }
        *{
            margin:0;
            padding:0;
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
                    <li class="active  smoothscroll wow rollIn animated" data-wow-delay="0.1s"><a href="index.php"><span>HOME</span></a></li>
                    <li class=" smoothscroll wow rollIn animated" data-wow-delay="0.1s"><a href="about.php" target="_blank"><span>PET SHOP</span></a>
                        <ul>
                            <li class="has-sub"><a href="about.php"><span>Pet Shop</span></a></li>
                            <li class="has-sub"><a href="#"><span>My Cart</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub  smoothscroll wow rollIn animated" data-wow-delay="0.1s"><a href="services.php" target="_blank"><span>PICTURE</span></a>
                        <ul>
                            <li class="has-sub"><a href="services.php"><span>Picture</span></a></li>
                            <li class="has-sub"><a href="My%20Cart.php"><span>My Cart</span></a></li>
                        </ul>
                    </li>
                    <li class="last smoothscroll wow rollIn animated" data-wow-delay="0.1s"><a href="contact.php" target="_blank"><span>CONTACT</span></a></li>
                    <li class="last smoothscroll wow rollIn animated" data-wow-delay="0.1s">
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

                    <li class="last sommthscroll wow rollIn animated" data-wow-delay="0.1s"><input type="search" placeholder="搜索你想要的" id="search" style="height: 30px;width: 200px;opacity: 0.8">
                        <a href="#"><span style="font-size: 18px;color:darkgreen">SEARCH</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="slider">
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="images/banner4.jpg" alt="" />
            <img src="images/banner3.jpg" alt="" />
            <img src="images/banner2.jpg" alt="" />
            <img src="images/banner1.jpg" alt="" />
            <img src="images/banner5.jpg" alt="" />
        </div>
    </div>
</div>
<div class="content">
        <div class="block-one">
            <h1 id="about" class="smoothscroll wow slideInUp animated" data-wow-delay="0.4s">About US</h1>
            <p class="smoothscrooll wow slideInUp animated" data-wow-delay="0.4s">There are many pets here. You can enjoy the pictures and buy the pets you like.</p>
            <ul>
                <li class="smoothscroll wow slideInUp" data-wow-delay="0.5s"><a href="#"><img src="images/pic13.jpg" alt=""></a></li>
                <li class="smoothscroll wow slideInUp" data-wow-delay="0.5s"><a href="#"><img src="images/pic18.jpg" alt=""></a></li>
                <li class="smoothscroll wow slideInUp" data-wow-delay="0.5s"><a href="#"><img src="images/pic19.jpg" alt=""></a></li>
            </ul>
        </div>

        <div class="block-two">
            <h1 id="about" class="smoothscroll wow slideInUp animated" data-wow-delay="0.2s">Pet Shop</h1>
            <p class="smoothscroll wow slideInUp animated" data-wow-delay="0.2s">You can buy the pets what you like,and you can also buy pet daily necessities and pet food for your pets!</p>
            <h3 class="shop smoothscroll wow slideInUp animated" data-wow-delay="0.3s"><a href="services.php" style="color: black">My Pet Shop</a></h3>
            <ul>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.5s">
                    <a href="#">
                        <img src="images/dogfood.jpg" alt="20KG40斤金毛阿拉斯加萨摩耶拉布拉多中大型犬幼犬成犬通用型">
                        <p><a href="#">20KG40斤金毛阿拉斯加萨摩耶拉布拉多中大型犬幼犬成犬通用型</a></p>
                        <p><a href="services.php">我的宠物商店</a></p>
                    </a></li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.5s">
                    <a href="#">
                        <img src="images/prod2.gif" alt="宠物自动喂食器狗可泡食喂食机狗狗猫咪狗粮4餐6餐定时定量投食机">
                        <p><a href="#">宠物自动喂食器狗可泡食喂食机狗狗猫咪狗粮4餐6餐定时定量投食机</a></p>
                        <p><a href="services.php">我的宠物商店</a></p>
                    </a></li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.5s">
                    <a href="#">
                        <img src="images/peng.jpg" alt="宠物自动喂食器狗可泡食喂食机狗狗猫咪狗粮4餐6餐定时定量投食机">
                        <p><a href="#">宠物自动喂食器狗可泡食喂食机狗狗猫咪狗粮4餐6餐定时定量投食机</a></p>
                        <p><a href="services.php">我的宠物商店</a></p>
                    </a></li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.5s">
                    <a href="#">
                        <img src="images/pic19.jpg" alt="狗狗玩具球小型中型大型犬金毛幼犬发声惨叫鸭宠物磨牙耐咬尖叫鸡">
                        <p><a href="#">狗狗玩具球小型中型大型犬金毛幼犬发声惨叫鸭宠物磨牙耐咬尖叫鸡</a></p>
                        <p><a href="services.php">我的宠物商店</a></p>
                    </a></li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.5s">
                    <a href="#">
                        <img src="images/tooth.jpg" alt="狗狗玩具球小型中型大型犬金毛幼犬发声惨叫鸭宠物磨牙耐咬尖叫鸡">
                        <p><a href="#">狗狗玩具球小型中型大型犬金毛幼犬发声惨叫鸭宠物磨牙耐咬尖叫鸡</a></p>
                        <p><a href="services.php">我的宠物商店</a></p>
                    </a></li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.5s">
                    <a href="#">
                        <img src="images/toy.jpg" alt="狗狗玩具球小型中型大型犬金毛幼犬发声惨叫鸭宠物磨牙耐咬尖叫鸡">
                        <p><a href="#">狗狗玩具球小型中型大型犬金毛幼犬发声惨叫鸭宠物磨牙耐咬尖叫鸡</a></p>
                        <p><a href="services.php">我的宠物商店</a></p>
                    </a></li>
            </ul>
        </div>
        <div class="block-three">
                <h1 id="about" class="smoothscroll wow slideInUp animated" data-wow-delay="0.1s">Function library summary</h1>
                <p class="smoothscroll wow slideInUp animated" data-wow-delay="0.2s">一次注册便能享受以下多种好处，免费内容不断更新中</p>
                <ul>
                    <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.4s"><button class="btn btn-default" style="background-color: deepskyblue">
                        <span class="glyphicon glyphicon-music"><span>我的音乐</span></span>
                    </button></li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.4s">
                    <button class="btn btn-default" style="background-color: yellow">
                        <span class="glyphicon glyphicon-home"><span>宠物商店</span></span>
                    </button>
                </li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.4s">
                    <button class="btn btn-default" style="background-color: orange">
                        <span class="glyphicon glyphicon-picture"><span>精美图片</span></span>
                    </button>
                </li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.4s">
                    <button class="btn btn-default" style="background-color: limegreen">
                        <span class="glyphicon glyphicon-phone"><span>联系我们</span></span>
                    </button>
                </li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.4s">
                    <button class="btn btn-default" style="background-color: pink">
                        <span class="glyphicon glyphicon-heart"><span>关于我们</span></span>
                    </button>
                </li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.4s">
                    <button class="btn btn-default" style="background-color: mediumpurple">
                        <span class="glyphicon glyphicon-home"><span>我的网站</span></span>
                    </button>
                </li>
                <li class="smoothscroll wow slideInUp animated" data-wow-delay="0.4s">
                    <button class="btn btn-default" style="background-color: lightseagreen">
                        <span class="glyphicon glyphicon-magnet"><span>在线支付</span></span>
                    </button>
                </li>
            </ul>
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
<div class="chat">
    <span class="left glyphicon glyphicon-chevron-up"></span>
    <div class="chat-set">
        <ul>
            <li>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1454040353&site=qq&menu=yes">
                    <img src="images/qq-fire.jpg" title="QQ联系我们">
                </a></li>
            <li>
                <a href="http://connect.qq.com/widget/shareqq/index.html?url=http%3A%2F%2Fzhidao.baidu.com%2Fquestion%2F1947146184407461868%3Fsharesource%3Dqq&amp;title=%E5%9C%A8Java%E4%B8%AD%E5%A6%82%E4%BD%95%E9%80%9A%E8%BF%87%E5%9C%A8%E6%95%B0%E6%8D%AE%E5%BA%93%E5%BE%97%E5%88%B0%E7%9A%84%E7%BB%93%E6%9E%9C%E9%9B%86%E5%BE%97%E5%88%B0%E8%A1%A8%E7%9A%84%E5%88%97%E6%95%B0%E5%92%8C%E8%A1%8C%E6%95%B0_%E7%99%BE%E5%BA%A6%E7%9F%A5%E9%81%93&amp;pics=https%3A%2F%2Fgss0.bdstatic.com%2F70cFsjip0QIZ8tyhnq%2Fimg%2Fiknow%2Fzhidaologo.png" target="_blank"><span class="fa fa-share fa-2x" title="页面分享"></span></a></li>
            <li>
                <img src="images/weixin.png" class="weixin" id="weixin" title="我的二维码" onclick="firstclick()"></li>
            <li>
                <span class="fa fa-up fa-2x"></span></li>
        </ul>

    </div>
</div>

<div id="mask"></div>
<div id="code">
    <img src="images/weixin.png" alt="">
    <div id="close"></div>
</div>


<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<!--<script src="js/jweixin-1.0.0.js"></script>-->
<!--<script src="js/audio.js"></script>-->
<!--<script src="js/music.js"></script>-->
<script type="text/javascript">
    new WOW().init();
    $(window).load(function() {
        $('#slider').nivoSlider();
    });

</script>

<script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
</body>
</html>



