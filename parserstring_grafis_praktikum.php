<?php
function generateWord($string){
$result = "";
$get = @file_get_contents($string);
$re = '/(^\d+.)|(.*)/m';
preg_match_all($re, $get, $matches);
	$haha = array_filter($matches[2]);
	$result =  implode("\r\n", $haha);
$fp = fopen(time().'.cpp', 'a+');
             fwrite($fp, $result);
             fclose($fp);
return $fp;
}
generateWord($argv[1]);
