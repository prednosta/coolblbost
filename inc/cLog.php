 <?php
include "conn.php"; // pripojeni db

$email = $conn->real_escape_string($_POST["email"]);
$heslo = $conn->real_escape_string($_POST["heslo"]);

// vyber dat
$dotaz = "SELECT email, heslo FROM uzivatel WHERE email='" . $email . "'" ;
$data = $conn->query($dotaz);

if ( $data->num_rows > 0 ) {
	while ( $radek = $data->fetch_assoc()) {
		//echo "email: " . $radek["email"] . " heslo: " . $radek["heslo"] . "<br />";
		if ( ( $radek["email"] == $email ) and ( $radek["heslo"] == $heslo ) ) {
			session_start();
			$_SESSION['login'] = stripslashes($email); // vytvoreni session login

			//echo "přihlášení je ok<br/>";

			header("Location:../house.php");
			die();
		}
		else {
			echo "něco je špatně<br/>";
		}
		//echo $radek["email"] . " " . $radek["heslo"] . "<br/>";
		

	}
} else {
	//echo "Chyba: " . $dotaz . "<br />" . $conn->error;
	echo "něco je špatně, zkus to <a href='../'>znovu</a><br/>";
}

$conn->close();
?> 