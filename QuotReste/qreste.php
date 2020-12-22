<?php 
	$nb1 = $_POST["nombre1"];
	$nb2 = $_POST["nombre2"];
	$quotient = 1;
	$reste = $nb1;
	while ($reste > $nb2) {
		$quotient += 1;
		$reste -= $nb2;
	}
	echo "Le quotient de " .$nb1. " /" . $nb2 . " est: " . $quotient. " et le reste est : ". $reste;
?>