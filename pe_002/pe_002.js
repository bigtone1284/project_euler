var evenFibSum = function(n) {
	var smaller = 0;
	var larger = 1;
	var sum = 0;
	while (n > smaller) {
	    if (smaller % 2 === 0) { 
			sum += smaller
		}
		larger += smaller;
		smaller = larger - smaller;
	}
	return sum
}