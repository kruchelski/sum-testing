"""
  Verificar se o número é impar (e diferente de zero)
"""
def isOdd(number):
  return ((number % 2 != 0) and  not(number == 0))

"""
  Buscar a função correta, conforme a condição, para verificar se o número é válido para ser somado
"""
def checkCondition(number, condition):
  if condition == 'impar':
    return isOdd(number)
  else:
    return False
  
"""
  Realizar uma soma, a partir de 0 até determinado número, com números que atendam uma condição
"""
def sumProgress(n):
  sum = 0
  for i in range(n):
    if (checkCondition(i, 'impar')):
      sum += i
  return sum


# Teste da função
print(sumProgress(10))