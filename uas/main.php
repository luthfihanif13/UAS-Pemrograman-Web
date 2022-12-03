<?php 
date_default_timezone_set('asia/kuala_lumpur');
echo"Today is ". date("l, d/m/y"). "<br>";
echo"Today is ". date("D.M.Y"). "<br>";
echo"Today is ". date("Y-M-D"). "<br>";
echo"Today is ". date("l"). "<br>";

echo"The Time is ". date("H:i:s"). "<br><br>";


$d = strtotime("yesterday");
echo"The Time is ". date("l, d/m/y H:i:s", $d). "<br>";
$d = strtotime("next monday");
echo"The Time is ". date("l, d/m/y H:i:s", $d). "<br>";
$d = strtotime("+6 months");
echo"The Time is ". date("l, d/m/y H:i:s", $d). "<br>";



?>