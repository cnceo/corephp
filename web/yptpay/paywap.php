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
		
		//echo $_REQUEST['BankCode'];exit;
		
					$data = http_build_query($data);
			$re = http_post($url, $data);
			
			$re = json_decode($re, true);
		//var_dump($re);exit;
		
				if ($re['code'] == 0) {
					
				$url = $re['data']['qrCode'];
			header("Location:$url");
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
		
	
      
?>

