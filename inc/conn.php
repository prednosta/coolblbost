 <?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "coolblbost";

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

$dotaz = "INSERT INTO uzivatel (jmeno, prijmeni, telefon, email)
			VALUES ('Franta', 'Čmoud', '+420958684856', 'fdafda@gmail.com')" ;
			
if ($conn->query($dotaz) === TRUE) {
	echo "<br />data zaznamenána<br />";
} else {
	echo "Chyba: " . $dotaz . "<br />" . $conn->error;
}

$conn->close();
?> 