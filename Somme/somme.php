<?php
	$nb = $_POST['nombre'];
	$s = 0;
	for ($i=1; $i < $nb-1 ; $i++) { 
		$s += $i;
	}
	echo $s;
?>