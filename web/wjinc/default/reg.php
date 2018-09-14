<?php $this->display('head.php');?>
  <div class="banner">
        <img src="picture/ban1.jpg" alt="">
        <div class="radio">
    <div class="container" id="noticeDom">
        <div class="tit">最新信息：</div>
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
                        <li><a href="at2.php">联系我们</a></li>
                    </ul>
                </div>
            </div>
            <div class="righttext fr">
                <div class="tit">用户注册</div>
                <div class="detail regbox">
                    <div class="regtable">
                  <form action="user/registers" method="post">
                            <div class="tbwrap">
                                <table>
                                    <tr>
                                        <th width="90"></th>
                                        <th></th>
                                    </tr>
                                    <tr id="recoTr">
                                        <td>推荐人账号：</td>
                                        <td>
                                            <input type="text" maxlength="15" name="daliuser" id="regRecoUserName" placeholder="非必填">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>账号规则：账号必须为6-15为数字和字母组合</td>
                                    </tr>
                                    <tr>
                                        <td><strong>*</strong>会员账号：</td>
                                        <td>
                                            <input type="text" maxlength="15" name="username" id="regUsername">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>密码规则：密码长度要有6-20个字符，以及必须含有数字和字母组合</td>
                                    </tr>
                                    <tr>
                                        <td><strong>*</strong>登录密码：</td>
                                        <td>
                                            <input type="password" name="password" id="regPassword" maxlength="20">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>*</strong>确认密码：</td>
                                        <td>
                                            <input type="password" name="cpasswd"  maxlength="20" id="password1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="cred">姓名必须与你用于提款的银行户口名字一致，否则无法提款</td>
                                    </tr>
                                    <tr>
                                        <td><strong>*</strong>真实姓名：</td>
                                        <td>
                                            <input type="text" name="name" id="fullName" maxlength="10">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>提款认证必须，务必记住</td>
										
                                    </tr>
									<tr >
                                        <td></td>
                                        <td class="cred">email格式：888888@qq.com</td>
                                    </tr>
                                    <tr id="showRegEmail" >
                                        <td><strong>*</strong>电子邮箱：</td>
                                        <td>
                                            <input type="text" name="email" id="email" maxlength="30">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>*</strong>取款密码：</td>
										 <td>
                                            <input type="password" name="coinpwd" maxlength="20" id="password1">
                                        </td>
                                      
                                    </tr>
                                  
                           
                                </table>
                                <div class="btns">
                                    <input type="submit" value="注册">
                                    <input type="reset">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <?php $this->display('foot.php');?>