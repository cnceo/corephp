<?php
        
		if($_REQUEST['BankCode']=='758'){
			$url = 'http://api.youngport.com.cn/Api/Alipay/precreatetrade';//支付宝
		}elseif($_REQUEST['BankCode']=='57'){
			 $url = 'http://api.youngport.com.cn/Api/Wxpay/native';//微信
		}else{
			$url = 'http://api.youngport.com.cn/Api/Qqpay/precreatetrade';//QQ
		}
		/*
		if($_REQUEST['BankCode']=='758'){
			$url = 'http://test.ypt5566.com/Api/Alipay/precreatetrade';//支付宝
		}elseif($_REQUEST['BankCode']=='57'){
			 $url = 'http://test.ypt5566.com/Api/Wxpay/native';//微信
		}else{
			$url = 'http://test.ypt5566.com/Api/Qqpay/precreatetrade';//QQ
		}*/
        $data['subject'] = 'pay';
		$data['orderSn'] = $_REQUEST['MerBillNo'];
		$data['totalAmount'] = $_REQUEST['Amount'];
		$data['notify'] = "http://wzcp688.com/yptpay/callback.php";
		$data['spbillCreateIp'] = $_SERVER["REMOTE_ADDR"]; 
		$data['timestamp'] = time();
		$data['mchId'] = '10170006756613';
		$data['channel'] = '00';
		$data['sign'] = getSign($data);
		
		
		
					$data = http_build_query($data);
			$re = http_post($url, $data);
			
			$re = json_decode($re, true);
		//var_dump($re);exit;
		
				if ($re['code'] == 0) {
					
				$url = $re['data']['qrCode'];
			$zfurl = "http://pan.baidu.com/share/qrcode?w=300&h=300&url=".$url;
		} else {
			echo $re['msg'];
		}
		
		
		
		
		
		
						function getSign($arr)
				{
					//过滤null和空
					$Parameters = array_filter($arr, function ($v) {
						if ($v === null || $v === '') {
							return false;
						}
						return true;
					});
					//签名步骤一：按字典序排序参数
					ksort($Parameters);
					$String =formatBizQueryParaMap($Parameters, false);
					//签名步骤二：在string后加入KEY
					$key = 'B730FD4509FEF65DE6D91F2AFF492E14652F4D15';
					$String = $String . "&key=" . $key;
					//签名步骤三：MD5加密
					$String = md5($String);
					//签名步骤四：所有字符转为大写
					$result_ = strtoupper($String);
					return $result_;
				}
				
								function formatBizQueryParaMap($paraMap, $urlencode)
				{
					$buff = "";
					ksort($paraMap);
					foreach ($paraMap as $k => $v) {
						if ($urlencode) {
							$v = json_encode($v);
						}
						//$buff .= strtolower($k) . "=" . $v . "&";
						$buff .= $k . "=" . $v . "&";
					}
					$reqPar = '';
					if (strlen($buff) > 0) {
						$reqPar = substr($buff, 0, strlen($buff) - 1);
					}

					return $reqPar;
				}

				
					function http_post($url,$post_data){
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_URL,$url);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$result = curl_exec($ch);
				curl_close($ch);
				return $result;
			}
		
	
		if($_REQUEST['BankCode']=='758'){
			$title="支付宝扫码";
		}elseif($_REQUEST['BankCode']=='57'){
			$title="微信扫码";
		}else{
			$title="QQ扫码";
		}
		
      
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php echo $title; ?></title>
<style>
*{padding:0;margin:0;}
body{background-color:#f1f1f1;}
#main{margin:0 auto 50px auto;border:1px solid #ccc;border-radius:5px;background-color:#fff;width:400px;}
.content{padding:20px 15px}
dl{margin:15px 0;}
dl dd{padding:5px 0;color:#333;text-align:left;}
dl dd span{font-size:1.3em;}
.btn{display:block;background-color:#2BAD13;color:#fff;text-decoration:none;padding:8px 0;text-align:center;border-radius:3px;}
#logo{margin-top:30px;background:url(logo.png) center center no-repeat;height:50px;}
</style>
<script type="text/javascript" src="/static/common/jquery.min.js"></script>
</head>

<body>
<div id="logo"></div>
<div id="main">
    <div class="content">
                    <dl>
                <dd>订单号码：<span><?php echo $_REQUEST['MerBillNo']; ?></span></dd>
                <dd>付款金额：<span><?php echo $_REQUEST['Amount']; ?></span>元</dd>
                <dd style="text-align:center"><img src="<?php echo $zfurl; ?>"></dd>
                <dd style="text-align:center" id="msgContent">请使用<?php echo $title; ?>二维码支付。</dd>
            </dl>
            </div>
</div>
</body>
</html>
<script>
function oderquery(t){
    var orderid='m2017081913210297515';
    $.post('queryOrder.php',{orderid:orderid},function(ret){
        if(ret=='ok'){
            window.location.href='returnUrl.php?orderid='+orderid;
        }
    });

    t=t+1;
    setTimeout('oderquery('+t+')',5000);
}

setTimeout('oderquery(1)',5000);
</script>
