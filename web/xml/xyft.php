<?
/*$api = 'http://old.1680210.com/Open/CurrentOpen?code=1008';*/
$api = 'http://www.1396p.me/Xyft/ajax?ajaxhandler=GetCqsscAwardData';
$resource = file_get_contents($api);  
$data = json_decode( $resource , 1 );

$crt = $data['current'];//new Add

$ct = $crt['periodDate'];//$data['c_t'];

$cd = $crt['awardTime'];//$data['c_d'];

$cr = $crt['awardNumbers'];//$data['l_r'];

header('Content-Type: text/xml;charset=utf8');
$limit=strlen($ct)-0;

$ct=substr($ct,0,$limit).''.substr($ct,$limit,$limit+0);

function tmp($v){
		 return 10>$v?"0{$v}":$v;
	}
	$cr=implode(',',array_map('tmp',array_slice(explode(',',$cr),0,20)));
echo '<xml>
<row expect="'.$ct.'" opencode="'.$cr.'" opentime="'.str_replace('/','-',$cd).'"/>
