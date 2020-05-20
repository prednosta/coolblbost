<?php
// pripojeni k databaze


$servername = "sql.endora.cz:3312"; // jmeno serveru
$username = "finchcz";        // uzivatelske jmeno
$password = "14Am3fvt";            // heslo

$dbname = "coolblbost";     // nazev databaze

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

?> 