<?php
function eulerThree($n){
	for($i = 2; $i < 100000; $i++){
		while($n % $i == 0){
			$n /= $i;
			if ($n == 1 or $n == $i){
				return $i;
			}
		}
	}
}
?>