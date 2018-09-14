<?php $this->display('head.php');?>
<link rel="stylesheet" href="/jh/css/login.css">
    <div class="bannerpromo">
		<div class="g_w1">
			<img src="/jh/images/banner_login.jpg" width="1000" height="221" alt="" />
			<div class="headertxt">注册</div>
			<div class="headersubtxt">欢迎来到迪士尼彩乐园，我们更专注彩票，博彩乐趣都在这里。</div>
		</div>
	</div>

	<div class="loginpanel">
		<div class="g_w1 clearfix body_bg">
			<div class="stepitm stepactive" style="z-index: 3;">
				<div class="stepno">01</div>
				<div class="stepnotxt">设置账户及登录密码</div>
				<div class="hlfcircle hlfcircleactive"></div>
			</div>
			<div class="stepitm" style="z-index: 2;">
				<div class="stepno ml90">02</div>
				<div class="stepnotxt">注册成功</div>
				<div class="hlfcircle"></div>
			</div>
			<div class="stepitm" style="z-index: 1;">
				<div class="stepno ml90">03</div>
				<div class="stepnotxt">登录网站</div>
			</div>

		</div>

		<div class="g_w1 clearfix body_bg">
		<form action="/index.php/user/registered" method="post" >
		<input type="hidden" name="parentId" value="<?=$args[0]?>" />
		<input type="hidden" name="lid" value="<?=$args[1]?>"  />

			<div class="row mt35 clearfix">
				<div class="col1">会员账号：</div>
				<div class="col2">
					<input type="text" maxlength="15" name="username"  class="textbox1">
				</div>
				<div id="nameTips" class="col3">账号规则：账号必须为6-15位数字和字母组合</div>
			</div>
			
			<div class="row mt35 clearfix">
				<div class="col1">登陆密码：</div>
				<div class="col2">
					<input type="password" maxlength="15" name="password"  class="textbox1 passwd">
				</div>
				<div id="nameTips" class="col3">密码规则：密码必须为6-15位数字和字母组合</div>
			</div>
			
			<div class="row mt35 clearfix">
				<div class="col1">确认密码：</div>
				<div class="col2">
					<input type="password" maxlength="15" name="cpasswd"  class="textbox1 chpasswd">
				</div>
				<div id="nameTips" class="col3"></div>
			</div>
			
			<div class="row mt35 clearfix">
				<div class="col1">真实姓名：</div>
				<div class="col2">
					<input type="text" maxlength="15" name="name"  class="textbox1">
				</div>
				<div id="nameTips" class="col3">真实姓名必须与您用于提款的银行户名字一致</div>
			</div>
			
			<div class="row mt35 clearfix">
				<div class="col1">取款密码：</div>
				<div class="col2">
					<input type="text" maxlength="15" name="coinpwd"  class="textbox1 qcoinpwd">
				</div>
				<div id="nameTips" class="col3"></div>
			</div>
			
			<div class="row mt35 clearfix">
				<div class="col1">电子邮箱:</div>
				<div class="col2">
					<input type="text" maxlength="15" name="email"  class="textbox1">
				</div>
				<div id="nameTips" class="col3">电子邮箱(Email)格式：88888888@qq.com</div>
			</div>
			
			<div class="row mt35 clearfix">
			<div class="col1">
				<INPUT id="Checkbox" type="checkbox" name="Checkbox"  class="rdFace" /> 
				</div>
				<div id="nameTips" class="col3">我已届满18岁合法博彩年龄﹐且同意各项开户条约。</div>
			</div>
			
			<div class="row" style="margin-bottom: 50px;">
				<div class="col1"></div>
				<div>
					<input  value="提交注册" type="submit" class="submitbtn" onclick="return check(form)">
					<input type="reset" name="regBtn2" value="重新填写" class="submitbtn" />
				</div>
			</div>
</FORM>
			
			
			

		</div>
	</div>
<script>



$('.chpasswd').blur(function(){
	var  chpasswd = $('.chpasswd').val();
	var  passwd= $('.passwd').val();
	if(chpasswd!=passwd){
		alert("两次输入密码不一样");
		return false;
	}
	

})
$('.qcoinpwd').blur(function(){
	var  qcoinpwd = $('.qcoinpwd').val();
	var  passwd= $('.passwd').val();
	if(qcoinpwd==passwd){
		alert("登陆密码和取款密码不能相同");
		return false;
	}
	

})
function check(form){
	if(form.username.value==""){
        alert("帐号不能为空");
        form.username.focus();
        return false;
    }
	if(form.password.value==""){
        alert("密码不能为空");
        form.password.focus();
        return false;
    }
	if(form.name.value==""){
        alert("真实姓名不能为空");
        form.name.focus();
        return false;
    }
	if(form.coinpwd.value==""){
        alert("取款密码不能为空");
        form.coinpwd.focus();
        return false;
    }
	if(form.email.value==""){
        alert("电子邮箱不能为空");
        form.email.focus();
        return false;
    }
	if($('#Checkbox').prop("checked")){
		
	}
	else
	{
		alert("未同意协议");
        return false;
	}	
    form.submit();
}
</script>
<?php $this->display('foot.php');?>