<?php
include("../res/x5engine.php");
$nameList = array("der","hdp","lkk","6fd","phf","j8c","2fj","kz2","xnx","jx2");
$charList = array("M","D","L","P","G","D","A","H","7","R");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
