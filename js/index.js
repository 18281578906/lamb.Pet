$(function () {
        $(".left").click(function () {
           $(".chat-set").toggle();
        })


})

//二维码
function firstclick() {
    var sheight=document.documentElement.scrollHeight;

    var swidth=document.documentElement.scrollWidth;
    $("#mask").css("height",sheight+'px');
    $("#code").css("width",swidth+'px');

    $("#mask").css("display","block");
    $("#code").css("display","block");

    $("#mask").click(function () {
        $("#mask").css("display","none");
        $("#code").css("display","none");
    })
    $("#code").click(function () {
        $("#mask").css("display","none");
        $("#code").css("display","none");
    })

}
