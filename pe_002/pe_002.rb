def fib_even_sum(n)
	larger = 1
	smaller = 0
	even_sum = 0
	while n > larger
		smaller, larger = larger, smaller + larger
		even_sum += smaller if smaller % 2 == 0
	end
	even_sum
end