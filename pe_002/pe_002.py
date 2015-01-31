def even_sum_fib(n):
	total = 0
	smaller = 0
	larger = 1
	while n < smaller:
		smaller, larger = larger, smaller + larger
		if smaller % 2 == 0:
			total += smaller
	return total