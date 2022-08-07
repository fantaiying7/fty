<?php
$url0='https://gitea.com/qiaoji/jar/raw/branch/main/qiaoji.json';
$temp = file_get_contents($url0);
$start='"spider"';
$end='"key": "csp_xpath_huya",';
$pattern='#'.preg_quote($start).'(.+?)'.preg_quote($end).'#s';
preg_match_all($pattern, $temp, $m);
$playurl0=$m[0][0];
$qiaoji=str_ireplace('"key": "csp_xpath_huya",', '', $playurl0);
$temp = file_get_contents('http://a.b.c.d/qj3.json');
$playurl=str_ireplace('qiaoji_jar', $qiaoji, $temp );
echo $playurl;
?>