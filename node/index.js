/**
 * Verificar se o número é impar (e diferente de zero)
 * @param {*} number Número para verificação
 */
function isOdd(number) {
  return (number % 2 !== 0 && !number == 0);
}

/**
 * Buscar a função correta, conforme a condição, para verificar se o número é válido para ser somado
 * @param {*} number Número para ser testado
 * @param {*} condition Condição de validade
 */
function checkCondition(number, condition){
  switch (condition) {
    case 'impar':
      return isOdd(number);
    default:
      return false;
  }
}

/**
 * Realizar uma soma, a partir de 0 até determinado número, com números que atendam uma condição
 * @param {*} number Número final do intervalo
 */
function sumProgress(n) {
  let sum = 0;
  for (let i = 0; i <= n; i++) {
    if (checkCondition(i, 'impar')) {
      sum += i;
    }
  }
  return sum;
}

// Teste da função
console.log(sumProgress(10))