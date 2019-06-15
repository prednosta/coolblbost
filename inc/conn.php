 <?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "coolmoney";

// pripojeni
$conn = new mysqli($servername, $username, $password, $dbname);

// kontrola pripojeni
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//printf("origo charset: %s<br />", $conn->character_set_name());

//změna charset
if (!$conn->set_charset("utf8")) {
	printf("utf8 nenacten: %s<br />", $conn->error);
	exit();
} else {
	//printf("nynější charset: %s<br />", $conn->character_set_name());
	$conn->character_set_name();
}

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