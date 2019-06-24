 <?php
include "conn.php"; // pripojeni db

//vyber dat
$dotaz = "SELECT id, jmeno, prijmeni, telefon, email FROM uzivatel WHERE email='" . $uzmail . "'"
$data = $conn->query($dotaz);
			
if ( $data->num_rows > 0 ) {
	while ( $radek = $data->fetch_assoc()) {
		echo " id: " . $radek["id"] . " jmeno: " . $radek["jmeno"] . 
		" prijmeni: " . $radek["prijmeni"] . " telefon: " . $radek["telefon"] . 
		" email: " . $radek["email"] . "<br />";
		
		$jmeno = $radek["jmeno"];
	}
} else {
	echo "Chyba: " . $dotaz . "<br />" . $conn->error;
}
$conn->close();
?> 