<?php
	$nb1 = $_POST["nombre1"];
	$nb2 = $_POST["nombre2"];
	$r = $nb1;
	while($r>0){
		$r-=$nb2;
	}
	if($r == 0) echo $nb1. " divisible par " .$nb2;
	else echo $nb1. "n'est pas divisible par " .$nb2;
?>