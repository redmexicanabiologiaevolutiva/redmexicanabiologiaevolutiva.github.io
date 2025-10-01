<?php
include("../res/x5engine.php");
$nameList = array("6u2","gfg","3sr","yng","v63","faa","jz6","vph","6du","n4p");
$charList = array("C","S","H","7","J","6","N","A","U","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
