<?php
date_default_timezone_set('Asia/Tehran');
echo date("y/m/d", time()+86400);
$t = time();
$t -= 24 * 60 * 60 * 7;
echo date(" H:i:s", $t);