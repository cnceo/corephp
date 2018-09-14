<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>聚宝盆</title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="cleartype" content="on">
<meta name="apple-mobile-web-app-status-bar-style" content="yes">
<script type="text/javascript" src="/zccss/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/zccss/onload.js"></script>
<script type="text/javascript" src="/zccss/reglogin.js"></script>
<link href="/zccss/ionic.min.css" rel="stylesheet">
<link href="/zccss/new_main.pack.min.css" rel="stylesheet">
<style type="text/css">
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
body {
    font-family: Tahoma, Helvetica, Arial, "Microsoft Yahei","微软雅黑", STXihei, "华文细黑", sans-serif;
    font-size: 24px;
    font-weight: 200;
    line-height: 32px;
    /*color: #828a94;*/
	margin:0;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}
p {
    margin: 0 0 10px;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
input {
    line-height: normal;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}

.white {
    color: #fff;
}

.header {
    position: fixed;
    top: 0;
    width: 100%;
    height: auto;
    z-index: 999;
}
.graynavi {
    height: 100px;
    width: 100%;
    background-color: #f2f2f2;
    position: relative;
    border-top: 2px solid #fff;
}
.aligncenter {
    text-align: center;
}
.cnbig1 {
    font-size: 22px;
    line-height: 20px;
    font-weight: 400;
}
.graybartitle {
    padding-top: 27px;
}
.graynavibtn {
    position: absolute;
    left: 20px;
    top: 32px;
}
.graynavi a {
    color: #000;
}
.marginleft20 {
    margin-left: 20px;
}
.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 10px;
    padding-right: 10px;
}
.cmargin20 {
    padding: 20px;
}
.cmargintop2 {
    margin-top: 150px;
}
.container h1 {
    font-size: 30px;
}
.container p {
    font-size: 26px;
}
.gap10 {
    height: 10px;
}
.rowfield {
    padding: 10px 0;
}
.rowfield .col1 {
    width: 25%;
    height: auto;
}
.margintop15 {
    margin-top: 15px;
}
.rowfield .col2 {
    width: 75%;
    height: auto;
}
.field_input {
    width: 100%;
    height: 65px;
    border: 2px solid #b6b6b6;
    padding: 20px;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.red {
    color: #fe6767;
}
.cnsmall1 {
    font-size: 22px;
}
.field_input2 {
    width: 50%;
    height: 65px;
    border: 2px solid #b6b6b6;
    padding: 20px;
}
.fl {
    float: left;
}
.cnbig1 {
    font-size: 22px;
    line-height: 20px;
    font-weight: 400;
}
.btnresetpass {
    width: 50%;
    text-align: center;
    padding: 20px 0;
    cursor: pointer;
    margin: 0 auto;
    background-color: #2061b3;
}
.clearfix:before, .clearfix:after, .dl-horizontal dd:before, .dl-horizontal dd:after, .container:before, .container:after, .container-fluid:before, .container-fluid:after, .row:before, .row:after, .form-horizontal .form-group:before, .form-horizontal .form-group:after {
    content: " ";
    display: table;
}
.clearfix:after, .dl-horizontal dd:after, .container:after, .container-fluid:after, .row:after, .form-horizontal .form-group:after {
    clear: both;
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
background-color: #FFFFFF;
border: none;
box-sizing: border-box;
height: 40px;
padding-left: 10px;
/*font-size: .7rem;*/
font-family: Tahoma, Helvetica, Arial, "Microsoft Yahei","微软雅黑", STXihei, "华文细黑", sans-serif;
font-size: 16px;
color: #000;}
.tj-btn{display: block;
text-align: center;
line-height: 42px;
height: 42px;
background: #76A0B7;
color: #fff;
font-size: 1rem;
border-radius: 4px;}
a{text-decoration: none;}
</style>
  <script type="text/javascript">
  $(document).ready(function() { 
    $('.infopanelrow .accounts:first').show();
    if (screen.width > 360 && !navigator.userAgent.match("UCBrowser") && navigator.userAgent.match("Android")) {
      $('body').css("zoom","0.5")
    }
  });
  </script>

</head>
<body style="background: url(&#39;/images/1/bg/loginbg.png&#39;) top no-repeat;background-size: cover;background-color: #f6f6f6;">



  <ion-header-bar style="padding:0" class="bar-header bar-positive bar" align-title="center">
	<div style="background: #76A0B7;padding: 5px;width: 100%;height: 100%;">
	<div class="buttons buttons-left">
		<span class="left-buttons">
    	<!--<a class="logo" href="#/home"><img ng-src="/static/images/logo/logo_zc.png" src="/static/images/logo/logo_zc.png"></a>-->
    	<a class="button ry-button" href="javascript:history.back();" >
    		<img src="/images/back1.png" alt="返回" style="vertical-align:middle;" style="background:0 0">	</a>
  	        </span>
  	</div>

  	<div class="title title-center header-item" style="left: 51px; right: 51px;">用户注册</div>

  	<div class="buttons buttons-right" ><span class="right-buttons">
    	<!-- ngIf: isLogin --><span ng-if="isLogin" class="">
	  		<!--<a class="button ry-button" href="/user/login2"><span class="span-user ng-binding">登录</span></a>-->
	  		<!--<a class="button ry-button" href="javascript:history.back();"><span class="span-user ng-binding">返回</span></a>-->
	  		<!--<a class="button ry-button" href="javascript:void(0);" onClick="guestLogin();"><span class="span-user ng-binding">试玩</span></a>-->
    		<!-- <a class="button ry-button" ng-click="showTestModal();">调试</a> -->
  		</span><!-- end ngIf: isLogin -->
  		
  		<!-- ngIf: inited && !isLogin -->
  		<ion-spinner ng-show="!inited" class="spinner topinfo-spinner spinner-ios ng-hide" style=""><svg viewBox="0 0 64 64"><g stroke-width="4" stroke-linecap="round"><line y1="17" y2="29" transform="translate(32,32) rotate(180)"><animate attributeName="stroke-opacity" dur="750ms" values="1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0;1" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(210)"><animate attributeName="stroke-opacity" dur="750ms" values="0;1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(240)"><animate attributeName="stroke-opacity" dur="750ms" values=".1;0;1;.85;.7;.65;.55;.45;.35;.25;.15;.1" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(270)"><animate attributeName="stroke-opacity" dur="750ms" values=".15;.1;0;1;.85;.7;.65;.55;.45;.35;.25;.15" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(300)"><animate attributeName="stroke-opacity" dur="750ms" values=".25;.15;.1;0;1;.85;.7;.65;.55;.45;.35;.25" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(330)"><animate attributeName="stroke-opacity" dur="750ms" values=".35;.25;.15;.1;0;1;.85;.7;.65;.55;.45;.35" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(0)"><animate attributeName="stroke-opacity" dur="750ms" values=".45;.35;.25;.15;.1;0;1;.85;.7;.65;.55;.45" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(30)"><animate attributeName="stroke-opacity" dur="750ms" values=".55;.45;.35;.25;.15;.1;0;1;.85;.7;.65;.55" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(60)"><animate attributeName="stroke-opacity" dur="750ms" values=".65;.55;.45;.35;.25;.15;.1;0;1;.85;.7;.65" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(90)"><animate attributeName="stroke-opacity" dur="750ms" values=".7;.65;.55;.45;.35;.25;.15;.1;0;1;.85;.7" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(120)"><animate attributeName="stroke-opacity" dur="750ms" values=".85;.7;.65;.55;.45;.35;.25;.15;.1;0;1;.85" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(150)"><animate attributeName="stroke-opacity" dur="750ms" values="1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0;1" repeatCount="indefinite"></animate></line></g></svg></ion-spinner>
  		
  	</span></div></div></ion-header-bar>
  

<form action="/index.php/user/registered" method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax">
    <div class="container" style="margin-top:45px">

<div class="logo" style="text-align:center;margin-top:30px"> 
      <img src="/zccss/logo.png" style="width:70%" alt=""> </div>

  <div style="margin:4rem auto">
         <ul>
         <li>
         <input type="text" id="daliuser" name="daliuser" placeholder="推荐人">	</li><li>
         <input type="text" id="username" name="username" placeholder="用户名 (6-15位字符)">	</li><li>
         <input type="password" id="password" name="password" placeholder="密码">	</li><li>
         <input type="password" name="cpasswd" id="cpasswd" placeholder="确认密码">	</li><li>
         <input type="text" name="qq" id="qq" maxlength="12" placeholder="QQ号">	</li>
		 
		<!-- <li>       
		 <input type="text" name="vcode" id="vcode" placeholder="验证码">
         <img style="right:1px;position: absolute;" alt="验证码" src="/zccss/1506245467" title="看不清楚，点我换图" onclick="this.src=&#39;/user/vcode/&#39;+(new Date()).getTime()" width="90" align="absmiddle" height="40">	</li>-->
		 
         <li style="margin-top:40px">
 
    
         <input type="submit" id="btnRegister" value="立即注册" style="background-color: #76A0B7;color:#FFFFFF;">	</li>
         <li><a href="/user/login2" class="tj-btn" style="font-size: 16px;">已有账号，登录！</a></li>
     </ul>
     </div>




</div></form></body></html>