<?php
function sumEvenFib($n){
	$sum = 0;
	$smaller = 0;
	$larger = 1;
	while ($n > $smaller){
		if ($smaller % 2 === 0){
			$sum += $smaller;
		}
		$larger += $smaller;
		$smaller = $larger - $smaller
	}
	return $sum;
}
?>