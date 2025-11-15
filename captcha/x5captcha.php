<?php
include("../res/x5engine.php");
$nameList = array("a5u","lxp","rn6","482","3yu","xv8","28t","ryz","833","wk7");
$charList = array("S","E","L","E","N","Z","C","E","3","4");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
