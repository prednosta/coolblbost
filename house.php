<?php
include "./inc/head.php" ;
session_start();
?>
<div class="cont">
	<div class="row">
		<div class="col">
			<h2>Vítej</h2>
		</div>
		<div class="col">
			<b>
<?php
	if ($_SESSION['login'] != "" ) { // pro prihlasene uzivatele
		echo " " .  $_SESSION['login'] . "<br />";
	} else {                         // pro neprihlasene
		//echo "abys byl pozdraven lépe, musíš se přihlásit.";
		header("Location:index.php");
	}
?>
			</b>
		</div>
		<div class="col">
			<a href="logout.php" class="btn btn-outline-primary text-uppercase">Odhlásit se</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<h2>nějaky</h2>
		</div>
		<div class="col">
			<h2>text</h2>
		</div>
		<div class="col">
			<h2>sem dej</h2>
		</div>
	</div>

</div>
<?php include "./inc/foot.php" ; ?>
