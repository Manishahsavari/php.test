<?php
date_default_timezone_set('Asia/Tehran');
$t = time();
$t -= 24 * 60 * 60 * 7;
echo date("Y/m/d H:i:s", $t);
