var sound1="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/%E6%B8%A1%E7%BA%A2%E5%B0%98.mp3"
var sound2="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/%E8%BF%9C%E8%B5%B0%E9%AB%98%E9%A3%9E.mp3"
var sound3="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/%E9%9D%9E%E9%85%8B.mp3"
var sound4="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/%E5%8C%86%E5%8C%86%E9%82%A3%E5%B9%B4.mp3"
var sound5="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/zjl.mp3"
var sound6="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/xuezhiqian.mp3"
var sound7="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/LoveSong.mp3"
var sound8="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/LR.mp3"
var sound9="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/%E5%85%A8%E9%83%A8%E9%83%BD%E6%98%AF%E4%BD%A0.mp3"
var sound10="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/Sugar.mp3"
var sound11="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/%E5%B8%A6%E4%BD%A0%E5%8E%BB%E6%97%85%E8%A1%8C.mp3"
var sound12="https://fchye-1252666383.cosgz.myqcloud.com/fangchengye/%E6%88%91%E4%BB%AC%E4%B8%8D%E4%B8%80%E6%A0%B7.mp3"
var x=Math.round(Math.random()*12)
x==0?x=sound1:x==1?x=sound2:x==2?x=sound3:x==3?x=sound4:x==4?x=sound5:x==5?x=sound6:x==6?x=sound7:x==7?x=sound8:x==8?x=sound9:x==9?x=sound10:x==10?x=sound11:x==11?x=sound12:x=sound12;
navigator.appName=="Microsoft Internet Explorer"?document.write('<audio src='+'"'+x+'"'+' loop="infinite" id="audio">'):document.write('<audio src='+'"'+x+'"'+'hidden="true" border="0" width="20" height="20" autostart="true" loop="true" id="audio">')
