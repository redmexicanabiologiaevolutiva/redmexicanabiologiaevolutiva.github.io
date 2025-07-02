<?php
include("../res/x5engine.php");
$nameList = array("glh","mef","vgx","jvy","pt2","l8j","3gt","6jw","2t5","2tf");
$charList = array("7","X","H","J","W","A","5","4","D","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
