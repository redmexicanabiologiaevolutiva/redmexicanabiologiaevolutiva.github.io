<?php
include("../res/x5engine.php");
$nameList = array("a7c","d4g","fkw","44f","ftc","grd","k27","kw4","4v5","p2x");
$charList = array("7","R","E","T","S","2","R","S","M","X");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
