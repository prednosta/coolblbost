<?php
include "./inc/head.php" ;
session_start();
?>

<h2>Vítej</h2> 

<?php
	if ($_SESSION['login'] != "" ) { // pro prihlasene uzivatele
		echo " " .  $_SESSION['login'] . "<br />";
	} else {                         // pro neprihlasene
		echo "abys byl pozdraven lépe, musíš se přihlísit.";
	}
?>

<?php include "./inc/foot.php" ; ?>
