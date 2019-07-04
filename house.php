<?php
include "./inc/head.php" ;
session_start();

include "./lng/lang.php";
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<h2><a href="../house.php" ><?php echo $VITEJ ?></a></h2>
		</div>
		<div class="col">
			<b>
<?php
	if ($_SESSION['login'] != "" ) { // pro prihlasene uzivatele
		echo " " .  $_SESSION['login'] . "<br />";
		if ( !isset($_GET['str']) ) {
			$_GET['str'] = '';
		}
	} else {                         // pro neprihlasene
		//echo "abys byl pozdraven lépe, musíš se přihlásit.";
		header("Location:index.php");
	}
?>
			</b>
		</div>
		<div class="col-auto">
			<a href="logout.php" class="btn btn-outline-danger text-uppercase"><?php echo $ODHLASIT ?></a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<hr />		   
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-auto">
			<a href="house.php?str=zakazky" class="btn <?php if($_GET['str']=='zakazky') { echo 'btn-primary'; } else { echo 'btn-outline-primary'; } ?> text-uppercase"><?php echo $ZAKAZKY ?></a>
		</div>
		<div class="col-md-3 col-auto">
			<a href="house.php?str=material" class="btn <?php if($_GET['str']=='material') { echo 'btn-primary'; } else { echo 'btn-outline-primary'; } ?> text-uppercase"><?php echo $MATERIAL ?></a>
		</div>
		<div class="col-md-3 col-auto">
			<a href="house.php?str=zakaznici" class="btn <?php if($_GET['str']=='zakaznici') { echo 'btn-primary'; } else { echo 'btn-outline-primary'; } ?> text-uppercase"><?php echo $ZAKAZNICI ?></a>
		</div>
		<div class="col-md-3 col-auto">
			<a href="house.php?str=faktury" class="btn <?php if($_GET['str']=='faktury') { echo 'btn-primary'; } else { echo 'btn-outline-primary'; } ?> text-uppercase"><?php echo $FAKTURY ?></a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<hr />		   
		</div>
	</div>
<?php
if ( isset($_GET['str']) ) {
	if ($_GET['str'] == "zakazky") {
		include_once "zakazky.php";
	} elseif ($_GET['str'] == "material") {
		include_once "material.php";
	} elseif ($_GET['str'] == "zakaznici") {
		include_once "zakaznici.php";
	} elseif ($_GET['str'] == "faktury") {
		include_once "faktury.php";
	} elseif ($_GET['str'] == '') {
		include_once "varovani.php";
	}
} else {
	include_once "varovani.php";
}

?>

</div>

<?php include "./inc/foot.php" ; ?>
