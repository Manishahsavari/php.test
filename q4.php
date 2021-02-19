<?php
date_default_timezone_set('Asia/Tehran');
//Instantiate the DateTime object.
$dateTime = new DateTime();

//Set the date to +7 days using the modify function.
$dateTime->modify('+7 day');

//Print out the date in a YYYY-MM-DD format.
echo $dateTime->format("Y/m/d");
$t = time();
$t -= 24 * 60 * 60 * 7;
echo date("  H:i:s", $t);