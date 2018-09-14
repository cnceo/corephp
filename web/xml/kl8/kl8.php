<?php
header('content-type:text/xml;charset=utf8');

$src = 'http://b.apiplus.net/newly.do?token=91e26475fbe33290&code=bjkl8&format=json';

$src .= '?_='.time();
$xml = file_get_contents(urldecode($src));
$xml = simplexml_load_string($xml);
$p = $xml ->row[0]->attributes()->opencode;
$p = substr($p,0,59);
echo '<xml>
<row expect="'. $xml ->row[0]->attributes()->expect .'" opencode="'.$p.'" opentime="'.$xml ->row[0]->attributes()->opentime.'"/>
</xml>';
