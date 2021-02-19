<?php
date_default_timezone_set('Asia/Tehran');
echo date("Y/m/d") ;

$t = time();
$t -= 24 * 60 * 60 * 7;
echo date(" H:i:s", $t);