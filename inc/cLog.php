<!doctype html>
<html lang="cs">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<mena name="description" content="Coolblbost">
	<mena name="robots" content="index,follow">
	<mena name="author" content="Břetislav Král">

    <link rel="stylesheet" href="./error.css" >

    <title>Coolblbost</title>
  </head>
  
<body>
<div class="err-cont">
<?php
include "conn.php"; // pripojeni db

$email = $conn->real_escape_string($_POST["email"]);
$heslo = $conn->real_escape_string($_POST["heslo"]);

// vyber dat
$dotaz = "SELECT email, heslo FROM uzivatel WHERE email='" . $email . "'" ;
$data = $conn->query($dotaz);

if ( $data->num_rows > 0 ) {
	while ( $radek = $data->fetch_assoc()) {
		if ( ( $radek["email"] == $email ) and ( $radek["heslo"] == $heslo ) ) {
			session_start();
			$_SESSION['login'] = stripslashes($email); // vytvoreni session login

			header("Location:../house.php");
			//die();
		}
		elseif (( $radek["email"] == $email ) and ( $radek["heslo"] != $heslo )) {
			echo "<span class='error'>špatné heslo</span> <br/>" . $radek["email"];
			header("Refresh: 3; url=../house.php");
		}
	}
} 
else {
	//echo "Chyba: " . $dotaz . "<br />" . $conn->error;
	echo "<span class='error'>něco je špatně, zkus to <a href='../'>znovu</a><br/></span>";
}

$conn->close();
?>
</div>
</body>
</html>