
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <title>WELCOME</title>
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <link rel="stylesheet" href="css/core.css">
	<script type="text/javascript" src="/jh/js/login.js"></script>
	<script type="text/javascript" src="/js/guest.js"></script>
    <script type="text/javascript"> 
    var url = '/api/checkwh.do?t='+Math.random();
    document.write("<script type='text/javascript' src='"+url+"'><\/script>");
    document.close();
</script>
</head>
<?php
if(!$_SESSION['from']){
	if($_GET['from'] == 'm'){
		session_start;
		$_SESSION['from']=$_GET['from'];
	}else{
		echo '<script type="text/javascript">browserRedirect();</script>';
	}
}
?>	
<body>
    <div class="header">
        <div class="top">
            <div class="container">
                <div class="logo">
                    <embed src="images/logo.png" quality="high" pluginspage="https://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="348" height="85" wmode="transparent">
                </div>
                <div class="logoword">
                    <img src="picture/logo-word.png" alt="">
                </div>
                <div class="userctrl">
                   <form action="/user/loginon" method="post">
                        <table>
                            <tr>
                                <td>
                                    <input type="text" placeholder="账号" id="username" name="username"  class="uname" tabindex="1" maxlength="20"><i class="icon-user"></i></td>
                                <td>
                                    <input type="password" placeholder="密码" tabindex="2"  name="password" id="password" class="upwd"  maxlength="20"><i class="icon-pwd"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="验证码" tabindex="3" id="loginVcode" class="authipt" maxlength="4"><span id="numberCode" class="authnum">8888</span><i class="icon-auth"></i></td>
                                <td>
                                    <input type="submit" value=""><a href="javascript:getPwd();" class="forget">忘记密码？</a></td>
                            </tr>
                        </table>
                        <div class="regbtn">
                            <a href="reg.php"></a>
                        </div>
                    </form>
                </div>
                <div class="links">
                    <ul>
                        <li><a href="javascript:addFavoriteHome(this,window.location.host);">设为首页</a></li>
                        <li><span></span></li>
                        <li><a href="javascript:AddFavorite('聚宝盆',location.href)">收藏本站</a></li>
                        <li><span></span></li>
                        <li><a href="javascript:guestLogin();">免费试玩</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container nav" id="nav">
                <ul>
                    <li><a href="/">首页</a></li>
                    <li><span></span></li>
                    <li><a href="reg.php">开户注册</a></li>
                    <li><span></span></li>
                 <!--   <li class="hot"><a href="appdownload.html">APP下载</a></li>
                    <li><span></span></li>-->
                    <li><a href="At1.php">常见问题</a></li>
                    <li><span></span></li>
                    <li><a href="at3.php">规则说明</a></li>
                    <li><span></span></li>
                    <li><a href="at2.php">加盟合作</a></li>
                    <li><span></span></li>
                    <li><a href="at4.php">关于我们</a></li>
         
                 
                    <li><span></span></li>
                    <li><a href="<?=$this->settings['zxkfUrl']?>" target="_blank">在线客服</a></li>
                </ul>
            </div>
        </div>
    </div>
 <script>
function check(form){
	 if(form.password1.value==""){
        alert("密码不能为空");
        form.password1.focus();
        return false;
    }
	else{
		var password=$('.upwd').val();
        var username =$('.uname').val();
        $.ajax({
            type: "POST",
            url: "user/logincheck",
             data: {username:username,password:password},
             dataType: "json",
             success: function(data){
                alert(data);
				form.password1.focus();
				return false;
                }       
        });
		
	}
}
</script>