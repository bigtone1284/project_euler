def sum_multiple_of_three_or_five(n)
	(1..n).select { |number| if number % 3 == 0 || number % 5 == 0  }.reduce(:+)
end