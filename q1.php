<?php
date_default_timezone_set('Asia/Tehran');
$yesterday = date("Y/m/d", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
echo $yesterday;
$t = time();
$t -= 24 * 60 * 60 * 7;
echo date(" H:i:s", $t);
