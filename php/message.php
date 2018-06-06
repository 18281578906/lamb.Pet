<?php

header("Content-type:text/html;charset=UTF-8");

//$user="127.0.0.1";

//$root="root";

//$password="970524";

//$con=mysqli_connect($user,$root,$password);

require_once ('connect.php');

$con=$link;

if(!$con) {

//    echo "连接失败";

}

    //mysqli_select_db($con,"qdm212696183_db");

    mysqli_query($con,"set names utf-8");

    //创建message表

//    $sql="create table message(

//name text,

//email text,

//message text

//)";

    if(!mysqli_query($con,$sql)) {

//        echo "创建表失败";

    }

        $name=$_POST["text"];

        $email=$_POST["email"];

        $message=$_POST["message"];

        $submit=$_POST["submit"];

$insert="insert into message(name,email,message) values("."'"."$name"."'".","."'"."$email"."'".","."'"."$message"."'".")";//将注册信息插入数据库表中



        if(!mysqli_query($con,$insert)){

//            echo "插入失败".$con->error;

        }

      echo "<script type=\"text/javascript\">

    alert(\"提交建议成功\");

    window.location=\"../contact.php\";

</script>";

