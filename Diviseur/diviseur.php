<?php
	$nb = $_POST["nombre"];
	$m = $nb / 2;
	echo "Les diviseurs de " .$nb. " sont: ";
	for ($i=1; $i < $m; $i++) { 
		if ($nb % $i == 0) {
			echo $i . ",\n";
		}
	}
?>