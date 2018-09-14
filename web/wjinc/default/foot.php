   <div class="footer">
    <div class="container clearfix">
        <div class="left fl">
            <ul>
                <li>
                    <i class="icon-wechat"></i>
                    <div>联系电话：<span class="cfgMainPhone">~~~~~~</span></div>
                </li>
                <li><span></span></li>
                <li>
                    <i class="icon-email"></i>
                    <div>电子邮箱：<span class="cfgMainEmail">qq@126.com</span></div>
                </li>
                <li><span></span></li>
                <li>
                    <i class="icon-qq"></i>
                    <div>客服QQ：<span class="cfgMainCustomerQQ"><?=$this->settings['mainQQUrl']?></span></div>
                </li>
            </ul>
        </div>
        <div class="right fr">
            <p>
              
                <a href="at4.php">关于我们</a>
                <a href="at1.php">常见问题</a>
                <a href="at3.php">规则说明</a>
                <a href="at2.php">加盟合作</a>
              
            </p>
            <p>Copyright © 聚宝盆 Reserved</p>
        </div>
    </div>
</div>
    <div class="float" id="float">
    <ul>
        <li><img src="picture/0_1.png" alt=""></li>
        <li>
            <a href="<?=$this->settings['zxkfUrl']?>" target="_blank">
                <img src="picture/1_1.png" alt="">
            </a>
        </li>
        <li>
            <a href="<?=$this->settings['zxkfUrl']?>" target="_blank">
                <img src="picture/2_1.png" alt="">
                <p class="cfgMainCustomerQQ"><?=$this->settings['mainQQUrl']?></p>
            </a>
        </li>
        <li>
            <a href="reg.php" target="_blank">
                <img src="picture/3_1.png" alt="">
            </a>
        </li>
        <li>
            <a href="javascript:guestLogin();">
                <img src="picture/4_1.png" alt="">
            </a>
        </li>
        <li id="float_close">
            <a href="javascript:;">
                <img src="picture/5_1.png" alt="">
            </a>
        </li>
    </ul>
</div>
    <link type="text/css" href="css/remodal.min.css" rel="stylesheet" />
<div class="remodal" data-remodal-id="modal" role="dialog" aria-describedby="modal1Desc" data-remodal-options="hashTracking: false" style="width: 250px">
    <div>
        <p id="modal1Desc" style="color: #000"></p>
        <span class="btnclose">关闭</span>
    </div>
</div>

<script src="js/config.js"></script>
<script src="js/home_main.min.js"></script>

    <script src="js/float.min.js"></script>
    <script src="js/unslider.min.js"></script>
    <script src="js/core.js"></script>
</body>

</html>