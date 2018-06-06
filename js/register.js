$(function () {
    $("#text").blur(function () {
        var $value=$(this).val();
        // if($value!='')
        // {
        //
        //     $.ajax({
        //         url:'../php/register2.php',
        //         type:'post',
        //         data:{text:$value},
        //         success:function (data) {
        //             console.log(data);
        //             if(data=='该用户名已被注册')
        //             {
        //                 $(".message p").text(data).fadeIn(1000);
        //                 $(".message").delay(2000).fadeOut(1000);
        //             }
        //             else
        //             {
        //                 $(".message p").text(data);
        //                 $(".message").fadeIn(1000).delay(2000).fadeOut(1000);
        //             }
        //         }
        //
        //     })
        //
        // }
       if($value=='') {
            $(".message p").text("用户名不能为空");
            $(".message").fadeIn(1000).delay(1000).fadeOut(1000);
        }

    })


    $("#comfirm").blur(function () {
        var $pass2=$("#comfirm").val();
        var $password=$("#pass").val();
        if($password!=$pass2)
        {
            $(".message p").text("前后密码不一致！");
            $(".message").fadeIn(1000).delay(1000).fadeOut(1000);
        }
        else {
            $(".message p").text("密码可用");
            $(".message").fadeIn(1000).delay(1000).fadeOut(1000);
        }
        if($password==$pass2&&$password=='')
        {
            $(".message p").text("密码不能为空");
            $(".message").fadeIn(1000).delay(1000).fadeOut(1000);
        }


    })

    $("#pass").blur(function () {
        var $password=$("#pass").val();

        if($password.length<6)
        {
            $(".message p").text("密码不能小于六位");
            $(".message").fadeIn(1000).delay(1000).fadeOut(1000);
        }

    })
})