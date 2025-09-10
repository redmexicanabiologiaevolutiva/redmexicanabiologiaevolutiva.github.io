<?php
include("../res/x5engine.php");
$nameList = array("any","f5z","652","wm6","6pg","eur","l2n","gw4","a2y","c24");
$charList = array("P","J","T","V","C","8","A","K","K","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
