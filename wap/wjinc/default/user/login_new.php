<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  	<meta name="format-detection" content="telephone=no">
  	<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
  	
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

    <style>
    * {margin: 0;  padding: 0;}
    #outer{ width:100%; height: 490px; margin: auto;  overflow: hidden;}
    #inner{width:100%;  margin: auto; position:relative; top:0px;}
    #inner p{line-height: 30px;}
    #spText{ height: 40px; width: 100%;border:1px solid red;}
    h2{ width: 100%; text-align: center; }
    h3{ width: 100%; padding-left:100%;}
    </style>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>



</head>

<body class="skin_blue grade-a platform-browser platform-win32 platform-ready" ng-app="ionicz" ng-controller="AppCtrl" style="">
	
	<ion-nav-bar class="bar-header bar-positive nav-bar-container" nav-bar-transition="ios" nav-bar-direction="none" nav-swipe="">
	<div class="nav-bar-block" nav-bar="cached">
	<ion-header-bar class="bar-header bar-positive bar" align-title="center">
	<div class="title title-center header-item"></div></ion-header-bar></div><div class="nav-bar-block" nav-bar="active"><ion-header-bar class="bar-header bar-positive bar" align-title="center">
	<div style="background: #712e5a;padding: 5px;width: 100%;height: 100%;">
	<div class="buttons buttons-left"><span class="left-buttons">
    	<a class="logo" href="#/home"><img ng-src="/static/images/logo/logo_zc.png" src="/static/images/logo/logo_zc.png"></a>
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
  	<!-- <div ng-if="inited">
  		<ion-nav-view></ion-nav-view>
  	</div> -->
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
				<marquee scrollamount="3" style="height:35px;height:35px" ng-click="showNoticeInfo();" class="ng-binding">尊敬的会员 您好，使用“支付宝/微信（2合1）扫码支付”请按平台入款通道的二维码扫码付款（为了您的充值能及时到账，请付款时不要提交整数.      </marquee>
			</div>
		</div>

		

    <div id="outer">
        <div id="inner">

		<div class="gamelist">
			<div class="title"><img src="/images/icon-game.png">热门游戏</div>
			<div class="row">
				<div class="col col-33">
					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/g-bjpk10.png" alt="北京PK10">
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
				</div><div class="col col-33">
					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/g-klsf1.png" alt="PC蛋蛋">
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
						<a href="/user/login2">
							<img src="../images/jiangsukuai3.png" alt="江苏快3">
							<p>江苏快3</p>
						</a> 
					</div>
				</div><div class="col col-33">
					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/A8liuhecai.png" alt="A8六合彩">
							<p>A8六合彩</p>
						</a>
					</div>
				</div><div class="col col-33">
					<div class="gamebox">
						<a href="/user/login2">
							<img src="../images/xinyunnongchang.png" alt="幸运农场">
							<p>幸运农场</p>
						</a>
					</div>
				</div><div class="col col-33">
									<div class="gamebox">
						<a href="javascript:void(0);" onclick="alert('即将上线敬请期待！');" d_num="15">
							<img src="../images/jisusaiche.png" alt="极速赛车">
<p>极速赛车</p>
						</a>
					</div>
				</div>
				
<div class="col col-33">
					<div class="gamebox">
						<a href="javascript:void(0);" onclick="alert('即将上线敬请期待！');" d_num="15">
							<img src="../images/A8zhanji.png" alt="A8战机">
<p>A8战机</p>
						</a>
					</div>
				</div><div class="col col-33">
					<div class="gamebox">
						<a href="javascript:void(0);" onclick="alert('即将上线敬请期待！');" d_num="15"><img src="../images/A8qipai.png" alt="A8棋牌">
						<p>A8棋牌</p></a>
					</div>
				</div>				

			</div>
		</div>	
<br><br><br>

        </div>
    </div>

    <script>
        var startX,//触摸时的坐标
            startY,
             x, //滑动的距离
             y,
             aboveY=0; // 设一个全局变量记录上一次内部块滑动的位置
          var documentHeight=$("#inner").height();//内部滑动模块的高度
          var wapperHeight=$("#outer").height(); //外部框架的高度
          

         var inner=document.getElementById("inner");  

            function touchStart(e){//触摸开始
                e.preventDefault();
                var touch=e.touches[0];
                startY = touch.pageY;   //刚触摸时的坐标                       
            }

            function touchMove(e){//滑动
                 e.preventDefault();
                var  touch = e.touches[0];               
                 y = touch.pageY - startY;//滑动的距离                                          
                 inner.style.top=aboveY+y+"px";    
                 document.getElementById("spText").innerHTML=inner.style.top;   
                         
                               
            }  

            function touchEnd(e){//手指离开屏幕                         
                 aboveY=parseInt(inner.style.top);//touch结束后记录内部滑块滑动的位置 在全局变量中体现 一定要用parseInt()将其转化为整数字;
                  if(y>0&&aboveY>0){//当滑动到最顶端时候不能再网上滑动
                      //inner.style.top=0;
                       $("#inner").animate({top:0},200);
                       aboveY=0;
                    } 
                  
                  if(y<0&&(aboveY<(-(documentHeight-wapperHeight)))){//当滑动到最底部时候不能再网下滑动
                    // inner.style.top=-(documentHeight-wapperHeight)+"px";
                      $("#inner").animate({top:-(documentHeight-wapperHeight)},200);
                     aboveY=-(documentHeight-wapperHeight);
                  } 
            }//
             document.getElementById("outer").addEventListener('touchstart', touchStart,false);  
             document.getElementById("outer").addEventListener('touchmove', touchMove,false);  
             document.getElementById("outer").addEventListener('touchend', touchEnd,false);  
    </script>



		


</div></div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 194px, 0px) scaleY(1); height: 111px;"></div></div></ion-content></ion-view>
	<ion-footer-bar class="max bar bar-footer">
		<ion-tabs class="tabs-icon-top tabs-light tabs-bottom tabs-standard"><div class="tab-nav tabs"> 
			<ion-tab icon-off="icon-home" icon-on="icon-home" href="#/home"></ion-tab>
			<ion-tab icon-off="icon-youxi" icon-on="icon-youxi" href="#/lottery/list"></ion-tab>
			<ion-tab icon-off="icon-29" icon-on="icon-29" href="#/bank/deposit"></ion-tab>
			<ion-tab icon-off="icon-29" icon-on="icon-29" href="#/bank/deposit"></ion-tab>
			<ion-tab icon-off="icon-yonghu" icon-on="icon-yonghu" href="#/ucenter/index"></ion-tab>
		<a ng-class="{'has-badge':badge, 'tab-hidden':isHidden(), 'tab-item-active': isTabActive()}" ng-disabled="disabled()" class="tab-item tab-item-active" icon-on="icon-home" icon-off="icon-home" style=""><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon icon-home" ng-if="getIcon()"></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">首页</span></a><a ng-class="{'has-badge':badge, 'tab-hidden':isHidden(), 'tab-item-active': isTabActive()}" ng-disabled="disabled()" class="tab-item" icon-on="icon-youxi" icon-off="icon-youxi"><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon icon-youxi" ng-if="getIcon()"></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">游戏大厅</span></a><a ng-class="{'has-badge':badge, 'tab-hidden':isHidden(), 'tab-item-active': isTabActive()}" ng-disabled="disabled()" class="tab-item" icon-on="icon-29" icon-off="icon-29"><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon icon-29" ng-if="getIcon()"></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">资金管理</span></a><a ng-class="{'has-badge':badge, 'tab-hidden':isHidden(), 'tab-item-active': isTabActive()}" ng-disabled="disabled()" class="tab-item" icon-on="icon-29" icon-off="icon-29"><!-- ngIf: badge --><!-- ngIf: getIcon() --><!-- end ngIf: getIcon() --><!--<span class="tab-title ng-binding" ng-bind-html="title">优惠活动</span></a><a ng-class="{'has-badge':badge, 'tab-hidden':isHidden(), 'tab-item-active': isTabActive()}" ng-disabled="disabled()" class="tab-item" icon-on="icon-yonghu" icon-off="icon-yonghu"><!-- ngIf: badge --><!-- ngIf: getIcon() --><i class="icon icon-yonghu" ng-if="getIcon()"></i><!-- end ngIf: getIcon() --><span class="tab-title ng-binding" ng-bind-html="title">我的</span></a></div></ion-tabs>
	</ion-footer-bar>
</ion-nav-view>
  	
  	<script id="test-template" type="text/ng-template">
	<div class="row">
		<div class="col">
			<div class="item item-input" ng-repeat="item in debugMsgList">{{item.time + ': ' + item.msg + ' - '+ item.count}}</div>
		</div>
	</div>
	</script>

  	
  	<script src="/views/home/home.js"></script>
  	<script src="/views/ucenter/ucenter.js"></script>
<div class="backdrop"></div></body></html>