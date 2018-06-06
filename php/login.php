<?php
header("Content-type:text/html;charset=UTF-8");
$act=$_GET['act'];

switch($act)
{
    case 'login':
        $name=$_POST["text"];
        $password=$_POST["password"];
        $autologin=$_POST['autologin'];
        require_once ('connect.php');
        if ($link) {
        mysqli_set_charset($link, 'utf8');
        //$select = mysqli_select_db($link, "qdm212696183_db");
        //$select = mysqli_select_db($link, "login");
//        if ($select) {

        if (isset($_POST["submit"])) {

        $name = $_POST["text"];
        $password = $_POST["password"];
        $autologin = $_POST['autologin'];

        if ($name==""||$password=="")//判断是否为空
        {
        echo "<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."请填写正确的信息！"."\"".")".";"."</script>";
        echo "<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../login.php"."\""."</script>";
        exit;
        }
        $str = "select password from register where username=" . "'" . "$name" . "'";
        $result = mysqli_query($link, $str);
        $pass = mysqli_fetch_row($result);

        $pa = $pass[0];


        if ($pa == $password)//判断密码与注册时密码是否一致
        {

            //cookie
            if ($autologin == 1) {
                //设置七天后过期
                setcookie('username', $name, strtotime('+7 days'), '/');
            } else {
                setcookie('username', $name, time() + 3600, '/');
            }

            exit("<script>
                        alert('登录成功');
                         location.href='../index.php';
                        </script>");
        } else {
            echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.alert" . "(" . "\"" . "登录失败！密码错误!" . "\"" . ")" . ";" . "</script>";
            echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.location=" . "\"" . "../login.php" . "\"" . "</script>";
        }
        }

//        }
//        else{
//            echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.alert" . "(" . "\"" . "您还未注册，请先注册!" . "\"" . ")" . ";" . "</script>";
//            echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.location=" . "\"" . "../login.php" . "\"" . "</script>";
//
//        }
        }
        else{
            echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.alert" . "(" . "\"" . "数据库连接失败!" . "\"" . ")" . ";" . "</script>";
            echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.location=" . "\"" . "../login.php" . "\"" . "</script>";

        }
         break;
    case 'logout':
        echo $act;
        $params=session_get_cookie_params();//得到cookie中的值
           setcookie('username','',time()-1,$params['path'],$params['domain'],$params['secure'],$params['httponly']);

        header('location:../index.php');
}