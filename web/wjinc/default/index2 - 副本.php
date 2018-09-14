  <?php $this->display('head.php');?>
  <div class="banner">
        	<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 419px;">
        		<ul class="bxslider" style="width: 615%; position: relative; transition-duration: 10s; transform: translate3d(-2842px, 0px, 0px);">
        		<li style="background: url(jh/images/homebanner.jpg) center center no-repeat; float: left; list-style: none; position: relative; width: 1421px;" class="bx-clone"></li>
				<li style="background: url(jh/images/homebanner2.jpg) center center no-repeat; float: left; list-style: none; position: relative; width: 1421px;"></li>
				<!--li style="background: url(jh/images/homebanner3.jpg) center center no-repeat; float: left; list-style: none; position: relative; width: 1421px;"></li>
				<li onclick="$('#popup_video, .back_body').show();" style="background: url(jh/images/homebanner.jpg) center center no-repeat; float: left; list-style: none; position: relative; width: 1421px;"></li>
                <li style="background: url(jh/images/homebanner2.jpg) center center no-repeat; float: left; list-style: none; position: relative; width: 1421px;"></li>
           		 <li style="background: url(jh/images/homebanner3.jpg) center center no-repeat; float: left; list-style: none; position: relative; width: 1421px;" class="bx-clone"></li></ul></div><div class="bx-controls bx-has-pager"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link">1</a></div><div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link active">2</a></div><div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link">3</a></div><div class="bx-pager-item"><a href="" data-slide-index="3" class="bx-pager-link">4</a></--></div></div></div>
        </div>
      <!--  <div class="btncontainer">
        	<div class="g_w1">
                <div class="btnclose">
                </div>  
            </div>
        </div>-->

<?php

	$nodeId=1;
	$sql="select * from {$this->prename}content where nodeId=$nodeId order by id desc";
	$data['data']=$this->getRows($sql);
		//echo $sql;
	//var_dump($data['data'][0]);exit;
	//print_r($sql);
?>	  <!--  
        <div class="prizeinfo">
       	  <div class="g_w1 clearfix" style="height: 41px;position:relative;">
                <img src="jh/images/dot.png" width="217" height="13" style="position: absolute; left: 392px; top: 90px;">
                <div class="col1">
                    <div class="col_header1">
                    	<div class="iconchat1"><img src="jh/images/icon_chat.png" width="27" height="27" alt=""></div>
                      <div class="coltxt">
                      		<ul id="ticker1">
                      		 <?php foreach($data['data']  as $val){ ?>
	
							<li><a onclick="dialog.open('公告','/noticelist',800,400,1)" href="javascript:;"><?php echo mb_substr($val['content'],0,26,'utf-8'); ?></a></li>
								<?php } ?>
							 

							</ul>
                      </div>
                    
               	  </div>
                 <div class="col_subhead">
                   	<div class="col_icon1">
                   	  		<img src="jh/images/icon_prize1.png" width="60" height="60" alt=""> 
                   	  </div>
                        <div class="col_headtxt1"><img src="jh/images/header_prize1.png" width="121" height="26" alt=""></div>
               	  </div>
                
                    <div class="col_img">
                    	<a href="/" target="_blank">
                    	<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 154px;"><ul class="bxslider2" style="padding-top: 10px; width: auto; position: relative;">
                          <li style="float: none; list-style: none; position: absolute; width: 460px; z-index: 0; display: none;"><div class="prizecontainer">
                          <div class="col1">
                            <img src="jh/images/1.png" width="126" height="126" alt="" class="clearfix"> 
                          </div>
                          <div class="divider2"></div>
                          <div class="col1">
                            <img src="jh/images/2.png" width="126" height="126" alt="" class="clearfix">
                          </div>
                          <div class="divider2"></div>
                          <div class="col1">
                            <img src="jh/images/3.png" width="126" height="126" alt="" class="clearfix"> 
                          </div>
                        </div></li>
                          <li style="float: none; list-style: none; position: absolute; width: 460px; z-index: 50;"><div class="prizecontainer">
                          <div class="col1">
                            <img src="jh/images/4.png" width="126" height="126" alt="" class="clearfix"> 
                          </div>
                          <div class="divider2"></div>
                          <div class="col1">
                            <img src="jh/images/5.png" width="126" height="126" alt="" class="clearfix"> 
                          </div>
                          <div class="divider2"></div>
                          <div class="col1">
                            <img src="jh/images/6.png" width="126" height="126" alt="" class="clearfix"> 
                          </div>
                        </div></li>
                        <li style="float: none; list-style: none; position: absolute; width: 460px; z-index: 0; display: none;"><div class="prizecontainer">
                          <div class="col1">
                            <img src="jh/images/7.png" width="126" height="126" alt="" class="clearfix"> 
                          </div>
                          <div class="divider2"></div>
                          <div class="col1">
                            <img src="jh/images/8.png" width="126" height="126" alt="" class="clearfix"> 
                          </div>
                          <div class="divider2"></div>
                          <div class="col1">
                            <img src="jh/images/9.png" width="126" height="126" alt="" class="clearfix"> 
                          </div>
                        </div></li>
                        </ul></div><div class="bx-controls bx-has-pager"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link">1</a></div><div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link active">2</a></div><div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link">3</a></div></div></div></div>
                        </a>
                    </div>
            </div>-->
                
              <!--  <div class="col2">
                	<div class="col_header2">
                    	<div class="iconchat2"><img src="jh/images/icon_chat.png" width="27" height="27" alt=""></div>
                        <div class="coltxt" id="trans_list"><ul id="ticker2" class="con_ts1">
	
</ul></div>-->
                    
                <!-- <div class="col_subhead2">
                 	<div class="col_icon2">
                   	  		<img src="jh/images/icon_prize2.png" width="60" height="60" alt=""> 
                   	  </div>
                        <div class="col_headtxt2"><img src="jh/images/header_prize2.png" width="104" height="26" alt=""></div>
                  	</div>-->
                    
                   <!--  <div class="col_img2">
                               <div class="prizecontainer2" style="padding-top:10px;">
                                    <div class="col1"><img src="jh/images/prize2.jpg" width="182" height="154" alt=""></div>
                                    <div class="col2">
                                    	<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 109px;"><ul class="bxslider3" style="width: auto; position: relative;">
                                        	<li style="float: none; list-style: none; position: absolute; width: 275px; z-index: 50; display: block;"><a href="/promo" target="_blank">
                                            <h1>聚宝盆</h1>
                                            <h2>敬请期待，更多活动...</h2>
                                            <p>时间：2017-1-28至<script language="javascript">document.write(getLastDay(2017,1))</script>2017-1-31截止</p>
                                            </a></li>
                                        </ul></div><div class="bx-controls bx-has-pager"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link active">1</a></div></div></div></div>
                                    </div>
                                </div>
               	     </div>-->
                </div>
                
         	 </div>
        </div>
        
	<!--	<div class="gamelist">
			<div class="gameitms1 g_w1 bxslider5">
				<a href="javascript:guestLogin();" target="_blank" class="bjpk10bjl" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="pcegg" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="sscjsc" style="display: inline-block;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="pk10jsc" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="aulucky5" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="aulucky8" style="display: inline-block;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="aulucky10" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="aulucky20" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="bjpk10" style="display: inline-block;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="cqssc" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="hk6" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="xync" style="display: inline-block;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="gxk3" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="gd11x5" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="cqssc" style="display: inline-block;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="xjssc" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="tjssc" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="gdklsf" style="display: inline-block;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="gxklsf" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="f3d" style="display: none;"></a>
				<a href="javascript:guestLogin();" target="_blank" class="pl3" style="display: inline-block;"></a>
            </div>
        </div>-->
        
        <div class="prodcontainer">
        	<div class="g_w1">
            	<div class="col1">
               	  <div class="spechd clearfix">
                    	<div class="specicon">
                   	    <img src="jh/images/icon_service.jpg" width="46" height="51" alt=""> </div>
                        <div class="spectxt">
                        	<h1>服务优势</h1>
                            <p>Service advantages</p>
                        </div>
                    </div>
                  	<div class="specdetail">
                   	  <div class="specleft">
                       	<div class="cci_title">存款到账</div>
                        <p>平均时间</p>
                      </div>
                    	<div class="specright">
                        	<div class="number1" id="count1">0</div><div class="number1txt">秒</div>
                        </div>
                    </div>
                    <div class="specgraph">
                    	<div class="stats1"><div class="stats2" id="bar1"></div></div>
                    </div>
                  <div class="specdetail">
                   	  <div class="specleft">
                       	<div class="cci_title">取款到账</div>
                        <p>平均时间</p>
                      </div>
                    	<div class="specright">
                        	<div class="number1" id="count2">0‘00</div><div class="number1txt">分</div>
                        </div>
                    </div>
                    <div class="specgraph">
                    	<div class="stats1"><div class="stats2" id="bar2"></div></div>
                    </div>
                	<div class="specdetail">
                    	<div class="specleft2">
                       		<div class="cci_title">便捷的银行服务</div>
                        	<p><img src="jh/images/creditcard.jpg" width="118" height="26" alt=""></p>
							<p class="card_count">目前我们支付机构有：</p>
                        </div>
                        <div class="specright">
                        	<div class="number1 bank_number" id="count3">0</div><div class="number1txt bank_numbertxt">家</div>
                        </div>
                    </div>
                
                
                </div>
                <div class="divider"></div>
                <div class="col2">
                	<div class="spechd clearfix">
                    	<div class="specicon2">
                   	    <img src="jh/images/icon_advantage.jpg" width="49" height="49" alt=""> </div>
                        <div class="spectxt">
                        	<h1>产品优势</h1>
                            <p>Product advantages</p>
                        </div>
                    </div>
                  	
             
                    <div class="specdetail2">
                       	<div class="cci_title">手机触屏版</div>
                        <p>专注彩票，独家提供手机触屏网页版，无需下载，打开网页即可下注畅玩，兼容完美。</p>
                    </div>
                    <div class="specdetail2">
                       	<div class="cci_title">专注彩票平台</div>
                        <p>世界最公平公正的官方彩票游戏，5分钟一期的北京P赛车PK10，10分钟一期的快乐10分钟，还有更加刺激的75秒一期的极速赛车，极速时时彩.........</p>
                    </div>
					  <div class="specdetail2">
                       	<div class="cci_title">牌照</div>
                        <p>聚宝盆是由菲律宾政府卡格扬河经济特区所授权和监管、最具历史的牌照。</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="col3">
                	<div class="spechd clearfix">
                    	<div class="specicon2">
                   	    <img src="jh/images/icon_lion.jpg" width="49" height="49" alt=""> </div>
                        <div class="spectxt">
                   	    <img src="jh/images/lionimg.jpg"> 
                        	<h2>会员大额提现均可在<br><span class="orange">聚宝盆</span>提现。</h2>
                            <p>单日可提款<span class="orange textbig">1000</span>万人民币。</p>
                        </div>
                    </div>
                    
                 <!--   <div class="spechd clearfix">
                    	<div class="specicon2">
                   	    <img src="jh/images/icon_licience.jpg" width="49" height="49" alt=""> </div>
                        <div class="spectxt">
                        	<h1>牌照</h1>
                            <p>License</p>
                      </div>
                    </div>
                  	
                    <div class="specdetail2">
                        <p style="margin:0">聚宝盆是由菲律宾政府卡格扬河经济特区所授权和监管，拥有菲律宾政府自2008年颁发、最具历史的牌照。</p>
                    </div>-->
                </div>
            </div>
        </div>
        
        <div class="blueline">
        </div>
        
        <div class="prodcontainer prodcontainer2">
			<div class="g_w1">
				<div class="col1">
					<div class="spechd clearfix">
						<div class="specicon">
							<img src="jh/images/icon_innovative.jpg" alt="">
						</div>
						<div class="spectxt">
							<h1>最新最热</h1>
							<p>Newest</p>
						</div>
					</div>
					<div class="specfull">
						<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 263px;">
							<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 266px;"><ul class="bxslider4" style="width: auto; position: relative;">
								<li style="float: none; list-style: none; position: absolute; width: 320px; z-index: 0; display: none;">
									<img src="jh/images/innovative1.jpg" alt="">
									<div class="specdetail">
										<div class="cci_title">极速赛车, 极速时时彩, 上线啦！</div>
										<p>极速赛车和极速时时彩是引进欧洲博彩公司开奖设备，由菲律宾博彩执照公司审核监控，联合开发的彩票游戏，保证公平公正。</p>
									</div>
								</li>
								<li style="float: none; list-style: none; position: absolute; width: 320px; z-index: 50;">
									<img src="jh/images/innovative2.jpg" alt="">
									<div class="specdetail">
										<div class="cci_title">极速赛车, 极速时时彩, 上线啦！</div>
										<p>业界最公平公正，开奖时间，北京时间(GMT+8) 全天开奖。</p>
									</div>
								</li>
							</ul></div><div class="bx-controls bx-has-pager"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link">1</a></div><div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link active">2</a></div></div></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
                <div class="divider"></div>
                <div class="col2">
                	<div class="spechd clearfix">
                    	<div class="specicon2">
                   	    <img src="jh/images/icon_partner.jpg" width="49" height="49" alt=""> </div>
                        <div class="spectxt">
                        	<h1>合作伙伴</h1>
                            <p>Partners</p>
                        </div>
                    </div>
                  	
                	<div class="specdetail2">
               	    <img src="jh/images/payment.jpg" width="190" height="192" alt=""> </div>
                </div>
                <div class="divider"></div>
             <div class="col3">
                	<div class="spechd clearfix">
                    	<div class="clearfix">
                            <div class="specicon2">
                            <img src="jh/images/icon_guide.jpg" width="49" height="49" alt=""> </div>
                            <div class="spectxt clearfix">
                                <h1>使用帮助</h1>
                                <p>Guide</p>
                            </div>
                        </div>
                       <!-- <div class="specdetail2 mt10">
                        	<div class="col1"><p><a href="Question.php">如何存款</a><br><a href="Question.php">如何提款</a></p></div>
                            <div class="col2"><p><a href="Question.php">隐私及政策</a></p></div>
                            <div class="col3"><p><a href="Question.php">联系我们</a><br><a href="Question.php">规则与条款</a></p></div>
                        </div>-->
                      <div class="greyline"></div>
                        <div class="specdetail2">
                        	<div class="cci_title">推荐浏览器</div>
                            <p><a href="http://www.firefox.com.cn/" target="_blank">火狐浏览器</a><br><a href="http://rj.baidu.com/soft/detail/14744.html?ald" target="_blank">谷歌浏览器</a><br><a href="http://rj.baidu.com/soft/detail/23356.html?ald" target="_blank">IE 9 以上浏览器</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="back_body" style="display:none;" onclick="$('#popup_video').children('iframe').attr('src', $('#popup_video').children('iframe').attr('src'));$('#popup_video, .back_body').hide();"></div>
            <div id="popup_video" class="popup_video">
	            <iframe frameborder="0" width="640" height="498" src="" allowfullscreen=""></iframe>
			</div>
			<script>
if($("#ticker2").is('.con_ts1')){
		var a =["qq","132","we","ka","adw","qewq","134","az","ds","qew","szd","139","jhg","yrr","vbn","135","sd","qiu","hut","vbf","138","mjh","jkmh","jh","kf","iuq","158","poq","hvn","bv","fas","ddd","gosd","baood","baeo","ba44","1558","a77765","bafd","1333","1785","nabo","bao","mio","zuiren","yelong","dingshe","liang","aod","k3224","23kk","goad","8966"];
		var i ;
		function showTest(){
			
			for( i =0 ; i<53 ;i++){
				var b ="";
				var k = Math.ceil(Math.random()*38);
				var j = Math.ceil(Math.random()*100000);
				b += a[k];
				c = "<li><a href=''>恭喜会员 "+b+"*** 提款 "+(j)+" 元成功,请及时查看帐目。</a></li>";
				$(".con_ts1").append(c);
			}

		}

		showTest();
	}


</script>
<?php $this->display('foot.php');?>