<?php
header('Content-Type: text/html; charset=utf-8');
$file = 'chinese_lunar_2019_2030.ics';
$content = file_get_contents($file);
preg_match_all('/DTSTART;VALUE=DATE:(\d+)T/',$content,$date_array);
preg_match_all('/SUMMARY:(.+)/',$content,$nl_array);

$weekarray=array("日","一","二","三","四","五","六"); //先定义一个数组

foreach($date_array[1] as $k=>$v){
	unset($datenum,$datestr,$nl_date,$full_date,$week);
	$datenum = strtotime($v);
	$datestr = date('n-j',$datenum);
	$nl_date = $nl_array[1][$k];
	$week = $weekarray[date('w',$datenum)];
	$full_date = $nl_date.'|'.$week.' '.$datestr;
	$content = str_replace("{$v}T235900\nSTATUS:CONFIRMED\n{$nl_array[0][$k]}","{$v}T235900\nSTATUS:CONFIRMED\nSUMMARY:{$full_date}",$content);
}

file_put_contents('chinese_lunar_my.ics',$content);

echo 'ok';