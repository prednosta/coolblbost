<?php // vyber lokalizace
$lng = "cz";
$_SESSION['jazyk'] = "cz";

	if ( $_SESSION['jazyk'] == "eng" ) {
		
		$lng = "eng";
		
	} 
	if ( $_SESSION['jazyk'] == "de" ) {
		
		$lng = "de";
		
	} 
	if ( $_SESSION['jazyk'] == "cz" ){
		
		$lng = "cz";
		
	}
	
require_once("lng." . $lng . ".php");

?>