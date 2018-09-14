<?php $para=$args[0]; 
if($para['type']==1){
	$actionNo=date('Ymd', strtotime($para['actionTime'])).substr($para['actionNo']+1000,1);
	if($para['actionNo']==120) $actionNo=date('Ymd', strtotime($para['actionTime'])-24*3600).substr($para['actionNo']+1000,1);
}elseif($para['type']==50){
	$time=strtotime($para['actionTime']);
	$actionNo = 179*(strtotime(date('Y-m-d', $time))-strtotime('2007-11-18'))/3600/24+$para['actionNo']-1267-1273-1253;	
}elseif($para['type']==60){
	//广东快乐10分
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if ($actionNo > 84) {
	$time -= 24 * 3600;
	}
	$actionNo = date('Ymd',$time) . substr(100 + $actionNo, 1);
}elseif($para['type']==61){
	//重庆幸运农场
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>97){
		$actionNo=date('ymd',strtotime(date('Y-m-d',$time -1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$actionNo=date('ymd',$time).substr(1000+$actionNo,1);
	}
}elseif($para['type']==65 || $para['type']==66){
	//北京快乐8和PC蛋蛋
	$time=$this->time;
	$actionNo = 179*(strtotime(date('Y-m-d', $time))-strtotime('2004-09-19'))/3600/24+$para['actionNo']-1292*2-1253;						
}elseif($para['type']==21){
	//广东11选五
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($actionNo>84){
	$time-=24*3600;
	}
	$actionNo=date('ymd', $time).substr(100+$actionNo,1);							 
}elseif($para['type']==10){
	// 江苏k3
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>82){ 
		$actionNo=date('ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$actionNo=date('ymd', $time).substr(1000+$actionNo,1);
			
	}							
}elseif($para['type']==11){
	// 吉林k3
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>87){ 
		$actionNo=date('ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$actionNo=date('ymd', $time).substr(1000+$actionNo,1);
			
	}							
}elseif($para['type']==12){
	// 广西k3
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>78){ 
		$actionNo=date('ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$actionNo=date('ymd', $time).substr(1000+$actionNo,1);
			
	}							
}elseif($para['type']==13){
	// 湖北k3
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>78){ 
		$actionNo=date('ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$actionNo=date('ymd', $time).substr(1000+$actionNo,1);
			
	}							
}elseif($para['type']==14){
	// 内蒙古k3
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>73){ 
		$actionNo=date('ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$actionNo=date('ymd', $time).substr(1000+$actionNo,1);
			
	}							
}elseif($para['type']==75){
	// 幸运k3
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>960){ 
		$actionNo=date('ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$actionNo=date('ymd', $time).substr(1000+$actionNo,1);
			
	}							
}elseif($para['type']==55){
	//幸运飞艇
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>180){ 
		$actionNo=date('Ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$timea=intval(date('Hi',$time));	
		if($timea>=0 && $timea <= 405){
		if($actionNo>131){$actionNo=date('Ymd', strtotime('-1 Day',$time)).substr(1000+$actionNo,1);}
		}else{$actionNo=date('Ymd', $time).substr(1000+$actionNo,1);}
	}								
}elseif($para['type']==72){
	//急速快车
	$time=strtotime($para['actionTime']);
	$actionNo=$para['actionNo'];
	if($para['actionNo']>960){ 
		$actionNo=date('Ymd', strtotime(date('Y-m-d',$time - 1*24*60*60))).substr(1000+$actionNo,1);
	}else{
		$timea=intval(date('Hi',$time));	
		if($timea>=0 && $timea <= -1){
		if($actionNo>960){$actionNo=date('Ymd', strtotime('-1 Day',$time)).substr(1000+$actionNo,1);}
		}else{$actionNo=date('Ymd', $time).substr(1000+$actionNo,1);}
	}								
}elseif($para['type']==70){
	// 六合彩
	$actionNo=$para['actionNo'];
}elseif($para['type']==74){
	// 六合彩
	$actionNo=$para['actionNo'];
}else{
	
}
?>
<div>
<input type="hidden" value="<?=$this->user['username']?>" />
<form action="/admin778899.php/data/added" target="ajax" method="post" call="dataSubmitCode" onajax="dataBeforeSubmitCode" dataType="html">
	<input type="hidden" name="type" value="<?=$para['type']?>"/>
	<table class="popupModal">
		<tr>
			<td class="title" width="180">期号：</td>
			<td><input type="text" name="number" value="<?=$actionNo?>"/></td>
		</tr>
		<tr>
			<td class="title">开奖时间：</td>
			<td><input type="text" name="time" value="<?=$para['actionTime']?>"/></td>
		</tr>
		<tr>
			<td class="title">开奖号码：</td>
			<td><input type="text" name="data"/></td>
		</tr>
		<tr>
			<td align="right"><span class="spn4">提示：</span></td>
			<td><span class="spn4">请确认【期号】和【开奖号码】正确，输入后不可更改！<br/>号码格式如: 1,2,3,4,5</span></td>
		</tr>
	</table>
</form>
</div>