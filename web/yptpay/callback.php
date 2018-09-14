<?php

	
	$input = file_get_contents("php://input");
	
	/*
log2file($input);
 function log2file($message,$logfile="log.txt"){
		file_put_contents($logfile,date("Y-m-d H:i:s : ").$message."\r\n",FILE_APPEND);
	}
	
	*/


            $pieces = explode(",", $input); //7

			$orderSn = explode(":", $pieces[0]);
			$remark = explode(":", $pieces[1]);
			$totalAmount = explode(":", $pieces[2]);
			$acquirerType = explode(":", $pieces[3]);
			$uuid = explode(":", $pieces[4]);
			$transTime = explode(":", $pieces[5]);
			$sign = explode(":", $pieces[6]);
	
			$data['orderSn'] = str_replace('"','', $orderSn[1]);
			$data['remark'] = str_replace('"','', $remark[1]);
			$data['totalAmount'] = str_replace('"','', $totalAmount[1]);
			$data['acquirerType'] = str_replace('"','', $acquirerType[1]);
			$data['transTime'] = str_replace('"','', $transTime[1]);
			$data['sign'] = str_replace('"','', $sign[1]);

			/*												
			ksort($data);
			reset($data);			
			
              unset($data['sign']);
			
			
			foreach ($data AS $key => $val)
			{
				if($val!=''&&$key!='signData')
				{
				
				$string  .= "$key=$val&";
				}
			}
			$string = trim($string,"&");
			$key = 'AC644DFD284F9B6D0031611FBA19C95F';
			$stringg = $string.'&key='.$key;
		$sing = MD5($stringg);//签名

*/


//if($sing==$data['sign']){


	$conn = mysql_connect('localhost','root','brotherink');
	if (!$conn)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	mysql_select_db('98cp',$conn);
	mysql_query("SET NAMES UTF8");
		
	$r6_Order=$data['orderSn'];	
	$r3_Amt=$data['totalAmount'];
	
			
	$actionTime=time();
	$result = mysql_query("select count(*) from ssc_member_recharge where rechargeId='{$r6_Order}'");
	$num = mysql_result($result,"0");
		if(!$num){
			echo "<tr align=center bgcolor=#FFFFFF><td colspan=16>暂无充值数据</td></tr>";
		}else{
		$result2 = mysql_query("select * from ssc_member_recharge where rechargeId='{$r6_Order}'");
		$row = mysql_fetch_array($result2);
		
		if($row['state']=='0')
		{      
		//-----------------帐变明细-----------------------------

		$actionIP=$_SERVER["REMOTE_ADDR"];
		 $chaxun5 = mysql_query("select coin from ssc_members where uid= '".$row['uid']."'");
		$coin = mysql_result($chaxun5,0);
		 $inserts = "insert into ssc_coin_log (uid,type,playedId,coin,userCoin,fcoin,liqType,actionUID,actionTime,actionIP,info,extfield0,extfield1) values ('".$row['uid']."',0,0,'".$r3_Amt."','".$coin."'+'".$r3_Amt."',0,1,0,UNIX_TIMESTAMP(),'".$actionIP."','汇付宝充值','".$row['id']."','".$r6_Order."')";
		 
		if (mysql_query($inserts)){
				echo "";
			}else{
				echo "Error creating database: " . mysql_error();
			}    
		 
		 
		 //-----------------帐变明细-----------------------------
		 
		 
		 
		$s="update ssc_members set coin=coin+{$r3_Amt} where  uid={$row['uid']}";
			if (mysql_query($s)){
				echo "";
			}else{
				echo "Error creating database: " . mysql_error();
			}  
		 
		 

		$ss="update ssc_member_recharge set state='1',rechargeAmount={$r3_Amt},actionTime={$actionTime} where  rechargeId='".$r6_Order."'";
			if (mysql_query($ss)){
				echo "";
			}else{
				echo "Error creating database: " . mysql_error();
			}    
			
		}
		else{	
			echo "";
		}
	}
			echo 'SUCCESS';	
			header("Location: www.wzcp688.com");

//}else{
	
	//echo "签名错误";
	
//}

