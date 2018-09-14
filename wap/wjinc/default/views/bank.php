<?php header('content-Type: text/html;charset=utf-8');?>
<ion-view view-title="银行账号" ng-init="bankInit();">
	<ion-nav-buttons side="left">
    	<a class="button button-icon icon-prepage" ng-click="back();"></a>
  	</ion-nav-buttons>
			<!--*************************************************************-->
		<ion-header-bar class="bar-header bar-positive bar" align-title="center">
		<div class="buttons buttons-left" style="transition-duration: 0ms;">
		<span class="left-buttons">
    	<a style="margin-left:-3px;" href="javascript:history.back();" >
    		<img src="/images/back1.png" alt="返回" style="vertical-align:middle;">	</a>
  	        </span>
		</div>
		<div class="title title-center header-item" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); left: 60px; right: 60px;">银行账号</div>
		<div class="buttons buttons-right" style="transition-duration: 0ms;">
		<span class="right-buttons">
			<a class="button ry-button" ng-click="logout();">退出</a>
		</span>
		</div>
		</ion-header-bar>
		<!--*************************************************************-->
  	 <ion-content class="m-center m-info m-bank">
<div class="padding" style="" ng-if="step==0">
	<a  class="button button-block button-addbank ng-binding" ng-click="addBank()">建立银行账号</a>
</div>
<div class="padding" ng-if="step==2 || step==3">
	<form name="mdfBankForm" novalidate
		ng-submit="mdfBankForm.$valid?mdfBank(mdfBankData):'return false'">
		<div class="list">
				<?php
                    $data=$this->getRows("select * from {$this->prename}bank_list where isDelete=0 order by sort asc");
                    foreach($data as $var){
                    ?><input  type="radio" value="<?=$var['id']?>" name="bankId" ng-model="mdfBankData.bankId" required><?=$var['name']?><br>
					<?php }?>
			<p class="item-warn text-assertive" ng-show="(mdfBankForm.$submitted || mdfBankForm.bankName.$touched)&&(mdfBankForm.bankName.$error.required)">*请选择银行</p>
			<div class="item item-input">
				<input ng-if="step==2"  type="text" name="address" ng-model="mdfBankData.address" placeholder="请输入开户网点"
					required ng-pattern="/^\S{1,30}$/" class="reset-field"/>
				<input ng-if="step==3" type="text" name="address" ng-model="mdfBankData.address" placeholder="{{mdfBankData.addressTip}}"
					required ng-pattern="/^\S{1,30}$/" class="reset-field"/>
			</div>
			<p class="item-warn2 text-assertive"
				ng-show="(mdfBankForm.$submitted || mdfBankForm.address.$touched)&&mdfBankForm.address.$error.required">*请填写开户网点</p>
			<p class="item-warn2 text-assertive"
				ng-show="(mdfBankForm.$submitted || mdfBankForm.address.$touched)&&mdfBankForm.address.$error.pattern">*请输入30位以内的字符</p>
			<div class="item item-input">
				<input ng-if="step==2" type="text" class="uc-set-scroll reset-field" name="cardNo" ng-model="mdfBankData.cardNo" placeholder="请输入银行卡号" required ng-pattern="/^[0-9]{6,19}$/" />
				<input ng-if="step==3" type="text" class="uc-set-scroll reset-field" name="cardNo" ng-model="mdfBankData.cardNo" placeholder="{{mdfBankData.cardNoTip}}" required ng-pattern="/^[0-9]{6,19}$/" />
			</div>
			<p class="item-warn2 text-assertive "
				ng-show="(mdfBankForm.$submitted || mdfBankForm.cardNo.$touched)&&(mdfBankForm.cardNo.$error.required)">*请填写银行卡号</p>
			<p class="item-warn2 text-assertive"
				ng-show="(mdfBankForm.$submitted || mdfBankForm.cardNo.$touched)&&(mdfBankForm.cardNo.$error.pattern)">*请输入6至19位的数字</p>
		</div>
		<div class="padding">
			<p>
				开户姓名：<span>{{My.getFullName()}}</span>
			</p>
			<button type="submit" ng-disabled="mdfBankForm.$invalid" class="button button-block button-positive" ng-click="bindBank()">确定</button>
		</div>
	</form>
</div>
<div class="list list-bank" ng-if="step==1">
	<div class="item item-avatar bank-round" >
		<div class="row">
			<!--<div class="col col-66">
				<img ng-src="/images/bank/{{bankIcon[My.getBank().bankName]}}.png" />
			</div>-->
			<div class="col col-33">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a ng-click="setStep(3);"><img src="/images/icon-modify.png"></a>	&nbsp;&nbsp;<a href="javascript:history.back();"><font color="#ffff00">返回</font></a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>
					<span>开户姓名</span>： <span>{{My.getFullName()}}</span>
				</p>
				<p>
					<span>开户账号</span>： <span>{{My.getBank().cardNo}}</span>
				</p>
				<p>
					<span>开户网点</span>： <span>{{My.getBank().subAddress}}</span>
				</p>
			</div>
		</div>
	</div>
</div>


</ion-content>
<script id="realname-template" type="text/ng-template">
	<div class="info-mdf-tip">请务必填写真实姓名(<span class="text-assertive">填写后不可修改</span>)</div>
	<div class="row">
		<div class="col">
			<div class="item item-input"><input type="text" class="txt-info reset-field" name="realname" ng-model="modalData.realname" ng-pattern="/[\u4e00-\u9fa5]{2,5}$/" placeholder="真实姓名"></div>
		</div>
	</div>
</script>
 </ion-view>