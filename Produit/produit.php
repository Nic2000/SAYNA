<?php 
	$nb1 = $_POST["nombre1"];
	$nb2 = $_POST["nombre2"];
	if ($nb1 == $nb2) {
		$produit = 0;
	}
	else{
		$produit = 0;
		for ($i=1; $i <= $nb2 ; $i++) { 
			$produit+=$nb1;
		}
	}
	echo "Le produit de: ".$nb1. " et ". $nb2. " est: ".  $produit;

?>