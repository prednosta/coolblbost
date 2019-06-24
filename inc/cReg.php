 <?php
include "conn.php"; // pripojeni db

$jmeno = $_POST['jmeno'];
$prijmeni = $_POST['prijmeni'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];

$heslo0 = $_POST["heslo0"];
$heslo1 = $_POST["heslo1"];

if ( $heslo0 == $heslo1 ) {
	$heslo = $heslo0;
}

$dotaz = "INSERT INTO uzivatel (jmeno, prijmeni, telefon, email, heslo)
			VALUES ( '$jmeno' , '$prijmeni', '$telefon', '$email', '$heslo')" ;
			
if ($conn->query($dotaz) === TRUE) {
	//echo "<br />data zaznamenána<br />";
	header("Location: ../");
	die();
} else {
	echo "Chyba: " . $dotaz . "<br />" . $conn->error;
}

$conn->close();
?> 