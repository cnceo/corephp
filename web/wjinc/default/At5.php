<?php $this->display('head.php');?>
  <div class="banner">
        <img src="picture/ban1.jpg" alt="">
        <div class="radio">
    <div class="container" id="noticeDom">
       <div >最新信息：<marquee><?=$this->settings['webCloseServiceResult']?></marquee></div>
    </div>
</div>
    </div>
    <div class="main">
        <div class="container clearfix">
            <div class="leftmenu fl">
                <div class="tit"></div>
                <div class="list">
                    <ul>
                  <li><a href="at1.php">常见问题</a></li>
                        <li><a href="at3.php">规则说明</a></li>         
                        <li><a href="at4.php">关于我们</a></li>
                        <li><a href="at5.php">联系我们</a></li>
                    </ul>
                </div>
            </div>
            <div class="righttext fr">
                <div class="tit">联系我们</div>
                <div class="detail">
                  关于聚宝盆的任何操作及相关问题，您可以在（常见问题）中找到答案，
                    <br>
                    <br> 如果您仍然有任何疑惑，可以随时洽询我们的24小时在线客服，
                    <br> 客服电话：~~~~~~
                    <br> 客服咨询QQ：qqqqqq
                    <br> 代理合作QQ：qqqqqq
                    <br> 电子邮箱：qq@126.com 
         
                    <br><br>
                </div>
            </div>
        </div>
    </div>
   <?php $this->display('foot.php');?>