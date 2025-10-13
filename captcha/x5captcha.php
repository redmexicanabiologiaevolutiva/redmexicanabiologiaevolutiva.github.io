<?php
include("../res/x5engine.php");
$nameList = array("53v","g5u","lfu","8hj","thr","5ys","2z8","mrr","k6l","x8y");
$charList = array("A","F","X","U","L","4","L","A","K","P");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
