<?php
$this->freshSession();
if($this->user['uid']){
$rechargeId=$this->getRechId();
$bankid=$_REQUEST["payId"];
$uid=$this->user['uid'];
$amount=floatval($_REQUEST['amount']);
$time=date('Y-m-d H:i:s', time());

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
		if($bankid==758 || $bankid=='ZHIFUBAO'){
		$para['info']='支付宝扫码充值';
		}elseif($bankid==57 || $bankid=='WEIXIN'){
		$para['info']='微信扫码充值';
		}else{
		$para['info']='用户在线充值';
		}
		if($this->insertRow($this->prename .'member_recharge', $para)){
			if($bankid==758 || $bankid==57){
				$url='?rechargeId='.$rechargeId.'&bankid='.$bankid.'&uid='.$uid.'&amount='.$amount;
				header("Location: http://www.38000a.com/pay/wx.html".$url); 
			}elseif($bankid=='ZHIFUBAO'){
				$return_params=3;
				$url='?order_no='.$rechargeId.'&bankid='.$bankid.'&uid='.$uid.'&order_amount='.$amount.'&return_params='.$return_params;
				header("Location: http://www.38000a.com/pay/zfb.html".$url); 
			}elseif( $bankid=='WEIXIN'){
				$return_params=2;
				$url='?order_no='.$rechargeId.'&bankid='.$bankid.'&uid='.$uid.'&order_amount='.$amount.'&return_params='.$return_params;
				header("Location: http://www.38000a.com/pay/wx.html".$url); 
			}else{
						
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