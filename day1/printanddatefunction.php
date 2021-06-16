<?php
//print something
echo "Tanim Ahmed"."<br>";
echo "Hello World"."<br>";
//use of date function
echo "Today's date:".date("d/m/Y")."<br>";

echo "Today's date is:".date("d.m.Y")."<br>";

echo "Today is:".date("l")."<br>";
echo "Time:".date("h:i:sa")."<br>";
echo "Year:".date("Y")."<br>";
//Finding time according to time zone
date_default_timezone_set("Asia/Dhaka");
echo date("h:i:sa")."<br>";
//own define time
$day = mktime(11,12,40,10,25,2021);
//mktime("hour min second month day year");
echo "My own define time".date("h:m:s:d:m:Y",$day);

//all information using one function

echo mktime()."<br>";
//string to time
$day = strtotime("6:05pm June 16 2021");
echo date("Y-m-d")."<br>";

$day = strtotime("tomorrow");
echo date("Y-m-d h:i:sa",$day)."<br>";

$day = strtotime("next sunday");
echo date("Y-m-d",$day)."<br>";
$day = strtotime("+3 Months");
echo date("Y-m-d",$day)."<br>";
//target date
$targetDay = strtotime("October 29");
 $distanceDay = ceil(($targetDay-time())/60/60/24);
 echo "Distance day is" . $distanceDay ." to october 29";;

?>
