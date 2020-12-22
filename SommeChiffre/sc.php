<?php
	$nb = $_POST['nombre'];
	$s =0;
	$r = 0;
	while ($r > 0) {
		$s += $r % 10;
		$r /= 10;
	}
	echo $s;
?>