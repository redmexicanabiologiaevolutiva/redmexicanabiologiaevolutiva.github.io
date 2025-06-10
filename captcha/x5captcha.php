<?php
include("../res/x5engine.php");
$nameList = array("te5","w4z","3pf","zsm","j3g","j77","ysg","vyu","x5g","gm4");
$charList = array("7","8","D","5","J","8","4","A","K","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
