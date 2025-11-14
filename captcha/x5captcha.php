<?php
include("../res/x5engine.php");
$nameList = array("vuz","adp","drn","775","2dm","mdj","w8r","33h","p5u","2yh");
$charList = array("N","R","4","6","E","2","4","S","G","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
