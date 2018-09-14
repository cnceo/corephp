<?php $this->display('head.php');?>
<link rel="stylesheet" href="jh/css/promo.css">
    <div class="bannerpromo">
		<div class="g_w1">
			<div class="headertxt">伍月份活动</div>
			<img src="jh/images/banner_promotion.jpg" width="1000" height="261" alt="" />
			<div class="tabcontainer">
				<div class="tabs">
					<div class="tabbig" onClick="window.location = '/promo';">全部</div>
				</div>
				<div class="tabs">
					<div class="tabsmall" onClick="window.location = '/promo?typeid=1';">存提款</div>
				</div>
				<div class="tabs">
					<div class="tabsmall" onClick="window.location = '/promo?typeid=2';">彩票类</div>
				</div>
				<div class="tabs">
					<div class="tabsmall" onClick="window.location = '/promo?typeid=0';">其他</div>
				</div>
				
			</div>
			<div class="hline1"></div>
		</div>
	</div>
	<div class="promocontent clearfix">
	 
		<div class="g_w1 overflowhd">
			<div class="hline2"></div>
			<div class="date">
				<h1>2017</h1>
				<p>01月28</p>
			</div>
			<div class="bullet">
				<img src="jh/images/promo_xsmall.png" width="26" height="24" alt="" />
			</div>
			<div class="arrow">
				<img src="jh/images/promoarrow.png" width="18" height="15" alt="" />
			</div>
			<div class="content">
				<div class="promocontenthead">
					敬请期待，更多活动...
				</div>
				<img src="http://img.sgqian.com/dsn/qidai.png" width="825" height="200" alt="" class="margintop10 promobanner" />
				<div class="contentbody">
					<p>
	<br />
</p>
				</div>
			</div>
		</div>
		 

	</div>
	
<?php $this->display('foot.php');?>