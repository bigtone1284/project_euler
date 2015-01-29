def sum_multiples_of_three_or_five(n):
	sum = 0
	for number in range(0, n):
		if number % 3 == 0 || number % 5 == 0:
			sum += number
	return sum