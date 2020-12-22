<?php
	$nb = $_POST['nombre'];
	if ($nb < 0) {
		echo "Veuillez entrer un nombre supérieur à 0";
	}
	else{
		$min = 1;
		$max = 1;
		for ($i=2; $i < $nb ; $i++) { 
			if ($max < $i) {
				$max = $i;
			}
			elseif ($min > $i) {
				$min = $i;
			}
		}
	}
	echo "Le minimum de valeur est ".$min.",le maximum est " .$max;
?>