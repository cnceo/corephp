<!DOCTYPE html>
<!-- saved from url=(0033)http://m.zhibo669.com/user/login2 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>聚宝盆</title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="cleartype" content="on">
<meta name="apple-mobile-web-app-status-bar-style" content="yes">
<script type="text/javascript" src="/321css/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/321css/onload.js"></script>
<script type="text/javascript" src="/321css/reglogin.js"></script>
<script type="text/javascript" src="/321css/guest.js"></script>
<link href="/321css/ionic.min.css" rel="stylesheet">
<link href="/321css/new_main.pack.min.css" rel="stylesheet">
<style type="text/css">
body {
    background-color: #f4f4f4;
}
.container {
    text-align: center;
}
input::-ms-input-placeholder{padding-left: 10px;}
input::-webkit-input-placeholder{padding-left: 10px;}
.logo {
    margin-top: 30px;
}
.toptextfield {
    margin-top: 30px;
}
.btmtextfield {
    margin-top: 0px;
}
.capchatextfield {
    margin-top: 15px;
    position: relative;
    height: 50px;
    margin-left: auto;
    margin-right: auto;
}
.cn {
    font-family: Tahoma, Helvetica, Arial, "Microsoft Yahei","微软雅黑", STXihei, "华文细黑", sans-serif;
    font-size: 16px;
    color: #000;
}
.textfieldtop {
    width: 100%;
    height: 50px;
    padding:0;
    border: 1px solid #e7e7e7;
    -webkit-border-top-left-radius: 12px;
    -webkit-border-top-right-radius: 12px;
    -moz-border-radius-topleft: 12px;
    -moz-border-radius-topright: 12px;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    border-bottom: none;
}
.textfieldbtm {
    width: 100%;
    height: 50px;
    padding: 0;
    border: 1px solid #e7e7e7;
    -webkit-border-bottom-right-radius: 12px;
    -webkit-border-bottom-left-radius: 12px;
    -moz-border-radius-bottomright: 12px;
    -moz-border-radius-bottomleft: 12px;
    border-bottom-right-radius: 12px;
    border-bottom-left-radius: 12px;
    margin-top: -2px;
}
.textfieldcapcha {
    width: 100%;
    height: 50px;
    padding: 0;
    border: 1px solid #e7e7e7;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
}
.capchaposition {
    position: absolute;
    right: 1px;
   
}
.submitgap {
    margin-top: 30px;
    text-align: center;
}
.registergap {
    margin-top: 20px;
    text-align: center;
}
.registergap a {
    line-height: 52px;
    text-decoration: none;
}
.registergap a:hover, .registergap a:visited {
    color: white;
    text-decoration: none;
}
.submitbtn {
    width: 100%;
 
    font-size: 16px !important;
    
    display: block;
text-align: center;
line-height: 42px;
height: 42px;
background: #76A0B7;
color: #fff;
border-radius: 4px;
}
.registerbtn {
    width: 45%;
    height: 52px;
    font-size: 16px !important;
    background-color: #4392c3;
    font-weight: bold;
    text-shadow: 1px 1px #4392c3;
    color: #ffffff;
    border-radius: 12px;
    -moz-border-radius: 12px;
    -webkit-border-radius: 12px;
    border: 2px solid #76e8e7;
    cursor: pointer;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    background: #76e8e7;
    background: -moz-linear-gradient(top, #76e8e7 0%, #4392c3 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#76e8e7), color-stop(100%,#4392c3));
    background: -webkit-linear-gradient(top, #76e8e7 0%,#4392c3 100%);
    background: -o-linear-gradient(top, #76e8e7 0%,#4392c3 100%);
    background: -ms-linear-gradient(top, #76e8e7 0%,#4392c3 100%);
    background: linear-gradient(to bottom, #76e8e7 0%,#4392c3 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#76e8e7', endColorstr='#4392c3',GradientType=0 );
    padding-top: 0px;
    display: inline-block;
	float: left;
}
.guestbtn {
    width: 49%;
    height: 52px;
    font-size: 16px !important;
    background-color: #faca68;
    font-weight: bold;
    text-shadow: 1px 1px #faca68;
    color: #ffffff;
    border-radius: 12px;
    -moz-border-radius: 12px;
    -webkit-border-radius: 12px;
    border: 2px solid #faca68;
    cursor: pointer;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    background: #faca68;
    background: -moz-linear-gradient(top, #faca68 0%, #f59831 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fce3bc), color-stop(100%,#f59831));
    background: -webkit-linear-gradient(top, #faca68 0%,#f59831 100%);
    background: -o-linear-gradient(top, #faca68 0%,#f59831 100%);
    background: -ms-linear-gradient(top, #faca68 0%,#f59831 100%);
    background: linear-gradient(to bottom, #faca68 0%,#f59831 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#faca68	', endColorstr='#7f0803',GradientType=0 );
    padding-top: 0px;
    display: inline-block;
	float: right;	
}

	ul {
    list-style: none;
    margin: 0;
padding: 0;
border: none;
}
input{  
   background:none;  
   outline:none;  
   border:0px;  
}
.container li{background: #fff;
margin-top: .5rem;
border: 1px solid #e6e6e6;
border-radius: 4px;
height: 40px;
line-height: 40px;
overflow: hidden;
position: relative;}
.container li input{position: absolute;
left: 0;
top: 0;
width: 100%;
background: 0 0;
border: none;
box-sizing: border-box;
height: 40px;
padding-left: 40px;
/*font-size: .7rem;*/
font-family: Tahoma, Helvetica, Arial, "Microsoft Yahei","微软雅黑", STXihei, "华文细黑", sans-serif;
font-size: 16px;
color: #000;}


.input-icon{float: left;
width: 40px;
text-align: center;}
.input-icon img{vertical-align: middle;}	
</style>
</head><body style="top no-repeat;background-size: cover;background-color: #f6f6f6;">
	<ion-header-bar style="padding:0" class="bar-header bar-positive bar" align-title="center">
	<div style="background: #76A0B7;padding: 5px;width: 100%;height: 100%;">
	
	
	
	
	<div class="buttons buttons-left">
		<span class="left-buttons">
    	<a class="button ry-button" href="javascript:history.back();" >
    		<img src="/images/back1.png" alt="返回" style="vertical-align:middle;">	</a>
  	        </span>
  	</div>
	
	

  	<div class="title title-center header-item" style="left: 51px; right: 51px;">用户登陆</div>

  	<div class="buttons buttons-right"><span class="right-buttons">
    	<!-- ngIf: isLogin --><span ng-if="isLogin" class="">
	  		<!--<a class="button ry-button" href="/user/login2"><span class="span-user ng-binding">登录</span></a>-->
	  		<!--<a class="button ry-button" href="/user/register"><span class="span-user ng-binding">注册</span></a>-->
	  		<!--<a class="button ry-button" href="javascript:void(0);" onClick="guestLogin();"><span class="span-user ng-binding">试玩</span></a>-->
    		<!-- <a class="button ry-button" ng-click="showTestModal();">调试</a> -->
  		</span><!-- end ngIf: isLogin -->
  		
  		<!-- ngIf: inited && !isLogin -->
  		<ion-spinner ng-show="!inited" class="spinner topinfo-spinner spinner-ios ng-hide" style=""><svg viewBox="0 0 64 64"><g stroke-width="4" stroke-linecap="round"><line y1="17" y2="29" transform="translate(32,32) rotate(180)"><animate attributeName="stroke-opacity" dur="750ms" values="1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0;1" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(210)"><animate attributeName="stroke-opacity" dur="750ms" values="0;1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(240)"><animate attributeName="stroke-opacity" dur="750ms" values=".1;0;1;.85;.7;.65;.55;.45;.35;.25;.15;.1" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(270)"><animate attributeName="stroke-opacity" dur="750ms" values=".15;.1;0;1;.85;.7;.65;.55;.45;.35;.25;.15" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(300)"><animate attributeName="stroke-opacity" dur="750ms" values=".25;.15;.1;0;1;.85;.7;.65;.55;.45;.35;.25" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(330)"><animate attributeName="stroke-opacity" dur="750ms" values=".35;.25;.15;.1;0;1;.85;.7;.65;.55;.45;.35" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(0)"><animate attributeName="stroke-opacity" dur="750ms" values=".45;.35;.25;.15;.1;0;1;.85;.7;.65;.55;.45" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(30)"><animate attributeName="stroke-opacity" dur="750ms" values=".55;.45;.35;.25;.15;.1;0;1;.85;.7;.65;.55" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(60)"><animate attributeName="stroke-opacity" dur="750ms" values=".65;.55;.45;.35;.25;.15;.1;0;1;.85;.7;.65" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(90)"><animate attributeName="stroke-opacity" dur="750ms" values=".7;.65;.55;.45;.35;.25;.15;.1;0;1;.85;.7" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(120)"><animate attributeName="stroke-opacity" dur="750ms" values=".85;.7;.65;.55;.45;.35;.25;.15;.1;0;1;.85" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(150)"><animate attributeName="stroke-opacity" dur="750ms" values="1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0;1" repeatCount="indefinite"></animate></line></g></svg></ion-spinner>
  		
  	</span></div></div></ion-header-bar>
<div class="container" style="margin-top:45px;padding:30px 10px 0">
<form action="/user/loginedto" method="post" onajax="userBeforeLoginto" enter="true" call="userLoginto" target="ajax">
    <div class="logo" style="text-align:center;"> 
      <img src="/321css/logo.png" style="width:70%" alt=""> </div>
      
      <div style="margin:2rem auto">
     <ul>
     	<li>
     <span class="input-icon"><img src="/321css/login_ico1.png"></span>
      <input type="text" name="username" id="username" placeholder="账号/手机号/邮箱">

    </li><li>
      <span class="input-icon"><img src="/321css/login_ico2.png"></span>
      <input name="password" id="password" type="password" placeholder="密码">
 
    </li> 
	<!--<li>
      <span class="input-icon"><img src="/321css/login_ico3.png"></span>
      <input type="text" class="textfieldcapcha cn" name="vcode" placeholder="验证码" maxlength="4" pattern="\d*">
      <div class="capchaposition"><img width="90" height="40" alt="验证码" align="absmiddle" src="/321css/1509439471" title="看不清楚，点我换图" onclick="this.src=&#39;/user/vcode/&#39;+(new Date()).getTime()"></div>

    </li> -->
    </ul> 
    </div>
    <div class="submitgap" style="margin-bottom: 20px;">
      <input name="submit" type="submit" class="submitbtn" id="submit" value="立即登录">
    </div>
  </form>
  <p class="tip"><a href="/home" style="text-decoration: none;color: #e54545;">返回首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #e54545;margin-top:10px"><a href="/user/register" style="text-decoration: none;color: #e54545;">快速注册</a></span></p>
  <!--<div class="registergap"> <a href="/user/register" class="registerbtn cn" id="submit">注册</a> <a href="javascript:void(0);" onClick="guestLogin();" class="guestbtn cn">免费试玩</a> </div>-->
  <div class="login_logo">
    <div>
      <div class="gap100"></div>
    </div>
  </div>
</div>

</body></html>