<?php
include("../res/x5engine.php");
$nameList = array("vnf","whx","pf2","rnh","ck5","zh8","7e8","uuj","nhm","xf6");
$charList = array("H","J","3","4","C","J","A","Y","V","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
