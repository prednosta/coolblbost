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

//změna charset
if (!$conn->set_charset("utf8")) {
	printf("utf8 nenacten: %s<br />", $conn->error);
	exit();
} else {
	$conn->character_set_name();
}

$email = $_POST["email"];
$heslo = $_POST["heslo"];

//vyber dat
$dotaz = "SELECT email, heslo FROM uzivatel WHERE email='" . $email . "'" ;
$data = $conn->query($dotaz);
			
if ( $data->num_rows > 0 ) {
	while ( $radek = $data->fetch_assoc()) {
		//echo "email: " . $radek["email"] . " heslo: " . $radek["heslo"] . "<br />";
		if ( ( $radek["email"] == $email ) and ( $radek["heslo"] == $heslo ) ) {
			echo "přihlášení je ok<br/>";
			header("refresh:3;url=../house.php");
			die();
		}
		else {
			echo "něco je špatně<br/>";
		}
		echo $radek["email"] . " " . $radek["heslo"] . "<br/>";


	}
} else {
	echo "Chyba: " . $dotaz . "<br />" . $conn->error;
}

echo $email . " " . $heslo;

$conn->close();
?> 