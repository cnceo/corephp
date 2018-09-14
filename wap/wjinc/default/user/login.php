<!DOCTYPE html>

<html style="font-size: 60%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-title" content="聚宝盆">
		<meta name="apple-mobile-web-app-capable" content="no">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<title>聚宝盆</title>
		
  	<style type="text/css">
  		body {background-color: }
  		#spinner {
  			width: 100%; 
  			height: 100%; 
  			background-color: rgba(0,0,0,4);
  			opacity: 1;
  			position: absolute; 
  			z-index: 11;			
				}			
  	</style>

	<link href="/lib/ionic/css/ionic.min.css" rel="stylesheet" />
  	<link href="/css/main.pack.min.css?v=1610251707" rel="stylesheet" />
	<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/js/guest.js"></script>


<link rel="stylesheet" href="/index/mui.min.css">
<link rel="stylesheet" href="/index/public.css">
<link rel="stylesheet" href="/index/main.css">
<link rel="stylesheet" href="/index/iconfont.css">
<link rel="stylesheet" href="/index/style.css">
<link rel="stylesheet" href="/index/common.css">



<script src="/index/swfobject.js"></script>
<script src="/index/web_socket.js"></script>
<script src="/index/share.js"></script> 


<script src="/index/jquery-2.1.4.min.js"></script>
<script src="/index/clipboard.min.js"></script>
<script src="/index/jquery.qrcode.min.js"></script>
<script src="/index/TouchSlide.1.1.js"></script>
<script src="/index/zepto.min.js"></script>
<script src="/index/layer.js"></script><link rel="stylesheet" href="/index/layer.css" id="layui_layer_skinlayercss" style="">
<script src="/index/common.js"></script>
<script src="/index/cssTransform.js"></script>
  	<script src="/views/home/home.js"></script>
  	<script src="/views/ucenter/ucenter.js"></script>
		<style type="text/css">
			html { overflow-x:hidden!important;overflow-y:hidden!important; }
		</style>
	</head>
<body class="skin_blue grade-a platform-browser platform-win32 platform-ready" ng-app="ionicz" ng-controller="AppCtrl" style="">

 	<style>
	.prompt-body .article{
		padding: 10px 20px;
	}
	.role_btn5 .layui-layer-btn .layui-layer-btn0{float:left;background: #b87f1b!important;border: 1px solid #dedede!important;color: #fff!important;}
	.role_btn5 .layui-layer-btn a{width:45%;text-align:center;background: #b87f1b!important;border: 1px solid #dedede!important;color: #fff!important;}
	</style>
	
	<!--loading-->
	<div class="loading-wrapper" style="display: none;">
		<div class="loading"></div>
	</div>	<!--top-->
	<header class="top" id="header">
	
	
	
	<ion-nav-bar class="bar-header bar-positive nav-bar-container" nav-bar-transition="ios" nav-bar-direction="none" nav-swipe="">
	<div class="nav-bar-block" nav-bar="cached">
	<ion-header-bar class="bar-header bar-positive bar" align-title="center">
	<div class="title title-center header-item"></div></ion-header-bar></div><div class="nav-bar-block" nav-bar="active"><ion-header-bar class="bar-header bar-positive bar" align-title="center">
	
	

	<div class="buttons buttons-left"><span class="left-buttons">
    	<a class="logo" href="#/home"><img ng-src="/static/images/logo/wycp.png" src="/static/images/logo/wycp.png"></a>
  	</span>
  	</div>

  	<div class="title title-center header-item" style="left: 51px; right: 51px;"></div>

  	<div class="buttons buttons-right"><span class="right-buttons">
    	<!-- ngIf: isLogin --><span ng-if="isLogin" class="">
	  		<a class="button ry-button" href="/user/login2"><span class="span-user ng-binding">登录</span></a>
	  		<a class="button ry-button" href="/user/register"><span class="span-user ng-binding">注册</span></a>

			<a class="button ry-button" href="javascript:void(0);" onClick="guestLogin();"><span class="span-user ng-binding">试玩</span></a>
    		<!-- <a class="button ry-button" ng-click="showTestModal();">调试</a> -->
  		</span><!-- end ngIf: isLogin -->
  		
  		<!-- ngIf: inited && !isLogin -->
  		<ion-spinner ng-show="!inited" class="spinner topinfo-spinner spinner-ios ng-hide" style=""><svg viewBox="0 0 64 64"><g stroke-width="4" stroke-linecap="round"><line y1="17" y2="29" transform="translate(32,32) rotate(180)"><animate attributeName="stroke-opacity" dur="750ms" values="1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0;1" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(210)"><animate attributeName="stroke-opacity" dur="750ms" values="0;1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(240)"><animate attributeName="stroke-opacity" dur="750ms" values=".1;0;1;.85;.7;.65;.55;.45;.35;.25;.15;.1" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(270)"><animate attributeName="stroke-opacity" dur="750ms" values=".15;.1;0;1;.85;.7;.65;.55;.45;.35;.25;.15" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(300)"><animate attributeName="stroke-opacity" dur="750ms" values=".25;.15;.1;0;1;.85;.7;.65;.55;.45;.35;.25" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(330)"><animate attributeName="stroke-opacity" dur="750ms" values=".35;.25;.15;.1;0;1;.85;.7;.65;.55;.45;.35" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(0)"><animate attributeName="stroke-opacity" dur="750ms" values=".45;.35;.25;.15;.1;0;1;.85;.7;.65;.55;.45" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(30)"><animate attributeName="stroke-opacity" dur="750ms" values=".55;.45;.35;.25;.15;.1;0;1;.85;.7;.65;.55" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(60)"><animate attributeName="stroke-opacity" dur="750ms" values=".65;.55;.45;.35;.25;.15;.1;0;1;.85;.7;.65" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(90)"><animate attributeName="stroke-opacity" dur="750ms" values=".7;.65;.55;.45;.35;.25;.15;.1;0;1;.85;.7" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(120)"><animate attributeName="stroke-opacity" dur="750ms" values=".85;.7;.65;.55;.45;.35;.25;.15;.1;0;1;.85" repeatCount="indefinite"></animate></line><line y1="17" y2="29" transform="translate(32,32) rotate(150)"><animate attributeName="stroke-opacity" dur="750ms" values="1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0;1" repeatCount="indefinite"></animate></line></g></svg></ion-spinner>
  		
  	</span></div></div></ion-header-bar>

  	</div></ion-nav-bar>
	</header>





	
	<ul id="right-xs" class="pop-setting1 ul-list-owner-role" style="display: none;">
		<i></i>
		<li><a href="javascript:;">我的地盘</a></li>
		<li><a href="javascript:;">安全退出</a></li>
	</ul>

	<!--main-->
  	<ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe="">

  	<ion-view class="m-index pane" view-title="" state="home" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);">
  	<ion-nav-buttons side="left" class="hide"></ion-nav-buttons>
  	
	<ion-nav-buttons side="right" class="hide"></ion-nav-buttons>
	  	
  	<ion-content class="scroll-content ionic-scroll  has-header"><div class="scroll">
  	 <!-- style="transform: translate3d(0px, -400px, 0px) scale(1);" -->
	   	<div class="slider" delegate-handle="home-handle" auto-play="true" does-continue="true" slide-interval="3000" style="visibility: visible;"><div class="slider-slides" ng-transclude="">
		    <!-- ngRepeat: url in slideList --><ion-slide ng-repeat="url in slideList" class="slider-slide" data-index="0" style="left: 0px; transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);"><img ng-src="/images/slide/zc/m1.jpg" src="/images/slide/zc/m1.jpg"></ion-slide><!-- end ngRepeat: url in slideList -->
		</div><div class="slider-pager"><!-- ngRepeat: slide in numSlides() track by $index --><span class="slider-pager-page active" ng-repeat="slide in numSlides() track by $index" ng-class="{active: $index == currentSlide}" ng-click="pagerClick($index)"><i class="icon ion-record"></i></span><!-- end ngRepeat: slide in numSlides() track by $index --></div></div>
		
		<div class="row notice">
			<div class="col col-10 notice-icon"></div>
			<div class="col col-90 notice-content">
				<marquee scrollamount="3" style="height:35px;height:35px" ng-click="showNoticeInfo();" class="ng-binding"><font color="red">聚宝盆欢迎你</font> </marquee>
			</div>
		</div>



		<!--热门游戏-->

		<div class="gamelist">
			<div class="title"><img src="/images/icon-game.png">热门游戏</div>
			<div class="row">
			<div class="col col-33" ng-if="gameMap[80].open==0" style="">
			<div class="gamebox">
				<a href="/user/login2"> <img src="../images/g_mssc.png">
					<p>极速赛车</p>
				</a>
			</div>
		</div>
				<div class="col col-33">
					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/g-bjpk10.png">
							<p>北京赛车</p>
						</a>
					</div>
				</div><div class="col col-33">
					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/g-ssc.png" alt="重庆时时彩">
<p>重庆时时彩</p>
						</a>
					</div>
				</div><div class="col col-33">
					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/g-xyft.png" alt="幸运飞艇">
<p>幸运飞艇</p>
						</a>
					</div>
				</div>
				<div class="col col-33" ng-if="gameMap[81].open==0" style="">
			<div class="gamebox">
				<a href="/user/login2"> <img src="../images/g-msssc.png">
					<p>极速时时彩</p>
				</a>
			</div>
		</div><div class="col col-33">
					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/g-pcdd.png" alt="PC蛋蛋">
<p>PC蛋蛋</p>
						</a>
					</div>
				</div><div class="col col-33">

					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/g-hkc.png" alt="香港六合彩">
<p>香港六合彩</p>
						</a>
					</div>
				</div><div class="col col-33">
					<div class="gamebox">
						<a ng-href="/user/login2" href="/user/login2">
							<img src="/images/g-klsf.png">
							<p>快乐十分</p>
						</a>
					</div>
				</div><div class="col col-33">
					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/g-hfc.png" alt="更多彩票">
<p>更多彩票</p>
						</a> 
					</div>
				</div>
	<div class="col col-33">
				<div class="gamebox">
						<a target="_blank"  href="https://fir.im/dl64">
							<img src="/images/app_down.png">
							<p>APP下载</p>
						</a>
					</div>
				</div>
				
			<div class="col col-33">
					<div class="gamebox">
						<a target="_blank"  href="mqqwpa://im/chat?chat_type=wpa&uin=qqqqqq&version=1&src_type=web&web_src=com">
							<img src="/images/menu-service.png">
							<p>在线客服</p>
						</a>
					</div>
				</div>	
				
				<div ng-if="!isLogin &amp;&amp; agentFlag!=1" class="col col-33" style="">
			<div class="gamebox">
				<a href="javascript:void(0);" onClick="guestLogin();"> <img src="/images/g-try.png">
					<p>免费试玩</p>
				</a>
			</div>
		</div>
				
		</div>
<br><br><br>

        </div>
<!-- 热门游戏 END --> <!-- 优惠活动 BEGIN -->
<!-- ngIf: actiMap[3] || actiMap[1] || actiMap[4] -->
<!--<div class="activity" ng-if="actiMap[3] || actiMap[1] || actiMap[4]" style="">
	<div class="head">
		<div class="title">
			<img src="/images/icon-activity.png">优惠活动
		</div>
		<a href="#">更多&gt;&gt;</a>
	</div>

	<div class="activity-list">

		<a href="#" ng-if="actiMap[1]"><p class="ng-binding">天天签到天天领取6元赢500万不是梦</p>
			<img src="/images/5.jpg">
		</a>
		
	</div>
</div>-->
<!-- end ngIf: actiMap[3] || actiMap[1] || actiMap[4] -->
<!-- 优惠活动 END -->		

	<!--111111111111111-->
	<div class="copyright">
	<p class="ng-binding"></p>
	</div>
	<!-- -->
	
</div></div>


<!--图标替换 -->
<div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 9px, 0px) scaleY(1); height: 390px;"></div></div></ion-content> <ion-footer-bar class="max bar bar-footer"> <ion-tabs class="tabs-icon-top tabs-light tabs-bottom tabs-standard"><div class="tab-nav tabs"> <ion-tab icon-off="icon-home" icon-on="icon-home" href="#/home"></ion-tab> <ion-tab icon-off="icon-youxi" icon-on="icon-youxi" href="#/lottery/list"></ion-tab> <ion-tab icon-off="icon-29" icon-on="icon-29" href="#/bank/deposit"></ion-tab> <!-- <ion-tab title="优惠活动" icon-off="icon-29" icon-on="icon-29" href="#/bank/deposit"></ion-tab> -->
<ion-tab icon-off="icon-yonghu" icon-on="icon-yonghu" href="#/ucenter/index"></ion-tab> <a href="/user/login2" ng-class="{&#39;has-badge&#39;:badge, &#39;tab-hidden&#39;:isHidden(), &#39;tab-item-active&#39;: isTabActive()}" ng-disabled="disabled()" class="tab-item tab-item-active" icon-on="icon-home" icon-off="icon-home" style=""><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon icon-home" ng-if="getIcon()" style=""></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">首页</span></a><a href="/user/login2" ng-class="{&#39;has-badge&#39;:badge, &#39;tab-hidden&#39;:isHidden(), &#39;tab-item-active&#39;: isTabActive()}" ng-disabled="disabled()" class="tab-item" icon-on="icon-youxi" icon-off="icon-youxi"><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon icon-youxi" ng-if="getIcon()" style=""></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">游戏大厅</span></a><a href="/user/login2" ng-class="{&#39;has-badge&#39;:badge, &#39;tab-hidden&#39;:isHidden(), &#39;tab-item-active&#39;: isTabActive()}" ng-disabled="disabled()" class="tab-item" icon-on="icon-29" icon-off="icon-29"><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon icon-29" ng-if="getIcon()" style=""></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">资金管理</span></a><a href="/user/login2" ng-class="{&#39;has-badge&#39;:badge, &#39;tab-hidden&#39;:isHidden(), &#39;tab-item-active&#39;: isTabActive()}" ng-disabled="disabled()" class="tab-item" icon-on="icon-yonghu" icon-off="icon-yonghu"><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon icon-yonghu" ng-if="getIcon()" style=""></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">我的</span></a></div></ion-tabs> </ion-footer-bar> </ion-view></ion-nav-view>
<!--图标替换结束 -->
	</ion-footer-bar>
	</ion-footer-bar>
</ion-nav-view>
  	
  	<script id="test-template" type="text/ng-template">
	<div class="row">
		<div class="col">
			<div class="item item-input" ng-repeat="item in debugMsgList">{{item.time + ': ' + item.msg + ' - '+ item.count}}</div>
		</div>
	</div>
	</script>

  	

<div class="backdrop"></div>

	


<script type="text/javascript">
//	$.ajaxSettings.async = false;
   var ServerUserId ='';
   var ClientServerUrl = "z6009.com";
   WEB_SOCKET_SWF_LOCATION = "../style/swf/WebSocketMain.swf";
   WEB_SOCKET_DEBUG = true;
   WEB_SOCKET_SUPPRESS_CROSS_DOMAIN_SWF_ERROR = false;
   var ws,mehash;
   
    $(document).ready(function(){
           $.post("lottery/redirectMain.do",function(data){
           		var obj = JSON.parse(data);
		  		$("#subContentId").html(obj.data);
		  		$("#ServerUserId").val(obj.hybm==null?'':obj.hybm);
		  		$("#ServerUserName").val(obj.hymc==null?'':obj.hymc);
			    getNotice();
		  });
    });
  	
    var getNotice = function(){
    	$.ajax({
			url : "lottery/notice.do",
			type : "POST",
			dataType : "json",
			success : function(data) {
				if(data.status=="4"){
					if(data.message!=""){
						$("#zy-gg").html(data.message);
						$("#zy-gg div:eq(0)").show();
						alertNotice();
					}
				}else if(data.status=="1"){
					
				}
				commoninit();
			    maininit();
			},
			error : function(x, h, e) {
				commoninit();
			    maininit();
			}
		});
    };
    
    function alertNotice(){
    	var str = "";
    	if($("#zy-gg div").size()==1){
    		str = "关   闭";
    	}else{
    		str = "下一页";
    	}
    	layer.open({
			type: 1,
			skin: "role_btn5",
			title: '公告',
			area:['300px', '370px'],
			shadeClose: true,
			content: $("#zy-gg"),
			btn: ["上一页", str],
			yes: function(){
				var index = $("#zy-gg div:visible").index();
				if(index!=0){
					$("#zy-gg div").hide();
					$("#zy-gg div:eq("+(index-1)+")").show();
					$("a.layui-layer-btn1").html("下一页");
				}
				return false;
			},
			btn2: function(){
				var index = $("#zy-gg div:visible").index();
				$("#zy-gg div").hide();
				var size = $("#zy-gg div").size();
				if(index+1==size){
					return true;
				}else if(index+2>=size){
					$("a.layui-layer-btn1").html("关   闭");
					$("#zy-gg div:eq("+(index+1)+")").show();
					return false;
				}else{
					$("#zy-gg div:eq("+(index+1)+")").show();
					return false;
				}
			}
		});
    }
    
	  if($("#ServerUserId").val() !=''){
	  	 clientinit();
	  }

  </script>
  <!--弹出公告-->
<!--  <script type="text/javascript">
window.alertcs = function(title,content)  
        {  
         var shield = document.createElement("DIV");  
         shield.id 

 = "shield";  
         shield.style.position = "absolute";  
         shield.style.left = "0px";  
         shield.style.top = "0px";  
         shield.style.width = "100%";  
         shield.style.height = document.body.scrollHeight+"px";  
         //弹出对话框时的背景颜色  
         shield.style.background = "#fff";  
         shield.style.textAlign = "center";  
         shield.style.zIndex = "25";  
         //背景透明 IE有效  
         //shield.style.filter = "alpha(opacity=0)";  
         var alertFram = document.createElement("DIV");  
         alertFram.id 

="alertFram";  
         alertFram.style.position = "absolute";  
         alertFram.style.left = "50%";  
         alertFram.style.top = "50%";  
         alertFram.style.marginLeft = "-175px";  
         alertFram.style.marginTop = "-75px";  
         alertFram.style.width = "350px"; 
         alertFram.style.background = "#fff";  
         alertFram.style.textAlign = "center";  
         alertFram.style.lineHeight = "150px";  
         alertFram.style.zIndex = "300";  
         strHtml = "<ul style=\"list-style:none;margin:0px;padding:0px;width:100%\">\n";  
         strHtml += " <li style=\"background:#76A0B7;padding-left:20px;font-size:14px;font-weight:bold;height:25px;line-height:25px;border:1px solid #F9CADE;color:#fff\">"+title+"</li>\n";  
         strHtml += " <li style=\"background:#fff;text-align:left;font-size:12px;line-height:30px;border-left:1px solid #F9CADE;border-right:1px solid #F9CADE;padding-left: 10px;\">"+content+"</li>\n";  
         strHtml += " <li style=\"background:#fff;text-align:center;font-weight:bold;height:35px;line-height:15px; border:1px solid #F9CADE;\"><input type=\"button\" value=\"确 定\" style=\"background-color:#76A0B7;color:#fff;\" onclick=\"doOk()\" /></li>\n";  
         strHtml += "</ul>\n";  
         alertFram.innerHTML = strHtml;  
         document.body.appendChild(alertFram);  
         document.body.appendChild(shield);  
         var ad = setInterval("doAlpha()",5);  
         this.doOk = function(){  
             alertFram.style.display = "none";  
             shield.style.display = "none";  
         }  
         alertFram.focus();  
         document.body.onselectstart = function(){return false;};  
        }  
        window.onload = function(){
            alertcs('升级公告','通知：网易彩票正式更名为：321彩票（），会员帐号，会员额度以及登入网址保持不变。');
        }
        
</script>-->
<!--弹出公告结束



<div id="tanchu" class="backdrop visible active"></div>
<div id="tanchuinfo" class="popup-container info-mdf popup-showing active" ng-class="cssClass" style="">
    <div class="popup">
        <div class="popup-head">
            <h3 class="popup-title ng-binding">公告</h3>
          
        </div>
        <div class="popup-body"><span>通知：网易彩票正式更名为"，会员帐号，会员额度以及登入网址保持不变。</span></div>
        <div class="popup-buttons">
            <button onclick="ttgb()" class="button ng-binding button-default">取消</button>
            <button onclick="ttgb()" class="button ng-binding button-positive">确定</button>
        </div>
    </div>
</div>
-->
  </body></html>