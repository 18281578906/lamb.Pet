<?php

//$servername = "localhost";

//$username = "root";

//$password = "970524";

//

//// 创建连接

//$link = mysqli_connect($servername, $username, $password);

require_once ('connect.php');

header("Content-type:text/html;charset=UTF-8");

// 检测连接

if ($link->connect_error) {

    echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."数据库连接失败!"."\"".")".";"."</script>";



    echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."../register.php"."\""."</script>";

}



// 创建数据库

//$sql = "CREATE DATABASE login";

//if ($link->query($sql) === TRUE) {

//    echo "数据库创建成功";

//} else {

//    echo "Error creating database: " . $link->error;

//}

$select=mysqli_select_db($link,"qdm212696183_db");

//$select=mysqli_select_db($link,"login");


//创建表

//    $createtable = "create table qdm212696183_db.register(username text,password text)";

//    if ($link->query($createtable) == true) {//执行

//        echo "创建表register成功";

//    } else {

//        echo "提示" . "Error creating table: " . $link->error;

//    }







       // $select = mysqli_select_db($link, "qdm212696183_db");//选择数据库,更改默认数据库为login

        if ($select) {

            echo "选择数据库成功";

            if (isset($_POST["submit"])) {

                $name = $_POST["text"];

                $password1 = $_POST["password"];

                $password2 = $_POST["password2"];



                if ($name == "" || $password1 == "") {

                    echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.alert" . "(" . "\"" . "请填写完成！" . "\"" . ")" . ";" . "</script>";

                    echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.location=" . "\"" . "../register.php" . "\"" . "</script>";

                    exit;

                }

                if ($password1 == $password2) {

                    $str = "select count(*) from register where username=" . "'" . "$name" . "'";

                    $result = mysqli_query($link, $str);//执行查询，查询是否存在  存在返回mysqli_result对象，其他返回true;

                    $pass = mysqli_fetch_row($result);

                    $pa = $pass[0];

                    echo "**********" . $str . "<br>";

                    if ($pa == 1) {//判断数据库表中是否已经存在该用户名

                        echo "<script type=" . "'" . "text/javascript" . "'" . ">" . "window.location=" . "'" . "../register.php" . "'" . "</script>";



                        echo "<script type=" . "'" . "text/javascript" . "'" . ">" . "window.alert" . "(" . "'" . "该用户名已被注册" . "'" . ")" . ";" . "</script>";

                        exit;

                    } else {

                        $sql = "insert into register(username,password) values(" . "'" . "$name" . "'" . "," . "'" . "$password1" . "'" . ")";//将注册信息插入数据库表中



                        mysqli_query($link, $sql);

                    }

                    $close = mysqli_close($link);

                    echo "///////////////" . $close;

                    if ($close) {

//                    echo"数据库关闭";

//                    echo"注册成功！";



                        echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.alert" . "(" . "\"" . "注册成功！" . "\"" . ")" . ";" . "</script>";

                        echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.location=" . "\"" . "../login.php" . "\"" . "</script>";

                    }

                } else {

                    echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.alert" . "(" . "\"" . "密码不一致！" . "\"" . ")" . ";" . "</script>";

                    echo "<script type=" . "\"" . "text/javascript" . "\"" . ">" . "window.location=" . "\"" . "../register.php" . "\"" . "</script>";

                }

            }

        }

        else{

            echo '数据库选择失败';

        }