<?php
$this->freshSession();
if($this->user['uid']){
$rechargeId=$this->getRechId();
$bankid=$_REQUEST["payId"];
$uid=$this->user['uid'];
$amount=floatval($_REQUEST['amount']);
$time=date('Y-m-d H:i:s', time());
$rechId = $_REQUEST['rechId'];


//var_dump($_REQUEST);
//exit;

if($amount && $uid && $rechargeId){
	if($this->update("INSERT INTO {$this->prename}order (order_number, username, recharge_amount, state, time) VALUES('{$rechargeId}', '{$uid}', '{$amount}', '0', '{$time}')")){
		$para=array();
		$para['mBankId']=intval($bankid);
		$para['amount']=floatval($amount);
		$para['rechargeId']=$rechargeId;
		$para['actionTime']=$this->time;
		$para['uid']=$this->user['uid'];
		$para['username']=$this->user['username'];
		$para['actionIP']=$this->ip(true);
		if($rechId==287 || $bankid=='ZHIFUBAO'){
		$para['info']='支付宝扫码充值';
		}elseif($rechId==286 || $bankid=='WEIXIN'){
		$para['info']='新宝微信扫码充值';
		}else{
		$para['info']='用户在线充值';
		}
		if($this->insertRow($this->prename .'member_recharge', $para)){
			if($bankid==1 || $bankid==2){
				$url='?MerBillNo='.$rechargeId.'&bankid='.$bankid.'&uid='.$uid.'&Amount='.$amount;
				header("Location: http://www.38000a.com/pay/zfb.html".$url); 
			}else{
				$pay_type='0002';//新宝微信
				$url='?pay_type='.$pay_type.'&order_no='.$rechargeId.'&amount='.$amount;
				header("Location: http://www.38000a.com/pay/wx.html".$url); 			
			}
		}else{
			echo '充值订单生成出错';
			exit;
		}		
	}else{
	echo '操作错误';
	exit;	
	}
}
}
?>