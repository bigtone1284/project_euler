var eulerThree = function(n) {
	for (var i = 2; i < 100000; i++) {
		while (n % i === 0) {
			n /= i;
			if (n == 1 || n == i) {
				return i
			}
		}
	}
}