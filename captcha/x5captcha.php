<?php
include("../res/x5engine.php");
$nameList = array("pfz","zfe","3ut","gat","nad","ctf","c6p","r5a","kdz","frr");
$charList = array("C","8","H","A","X","Y","Z","V","C","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
