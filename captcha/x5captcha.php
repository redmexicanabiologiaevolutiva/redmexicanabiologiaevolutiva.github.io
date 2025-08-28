<?php
include("../res/x5engine.php");
$nameList = array("txx","lkd","4sw","fle","jt4","tjg","sdp","2k5","zhc","r4p");
$charList = array("7","N","U","N","W","3","Y","C","5","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
