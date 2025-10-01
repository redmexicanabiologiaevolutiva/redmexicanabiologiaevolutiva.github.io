<?php
include("../res/x5engine.php");
$nameList = array("pe4","3ze","jhn","gnk","cg2","kge","7dz","w8x","xhm","tvz");
$charList = array("S","U","Y","J","D","X","T","R","E","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
