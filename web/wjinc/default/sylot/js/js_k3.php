<?php
$lastNo=$this->getGameLastNo(75);
$opencode =$zddata?$zddata:randKeys();

header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';

echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode.'" opentime="'.$lastNo['actionTime'].'"/></xml>';

/* 生成随机数 */
function randKeys($len=3){
    $rand='';
    for($x=0;$x<$len;$x++){
        srand((double)microtime()*1000000);
        $rand.=($rand!=''?',':'').mt_rand(1,6);
    }
    return $rand;
}
?>