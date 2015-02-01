def Euler3(n)
  for i in (2..100000)
    while n % i == 0
      n /= i
      if n == 1 or n == i
        return i
      end
    end
  end
end