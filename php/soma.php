<!DOCTYPE html>
<html>

  <head>
    <title>Somador de números</title>
  </head>

  <body style="font-family:helvetica">

    <!-- Funções -->
    <?php
    /**
     * Verificar se o número é impar (e diferente de zero)
     */
    function isOdd($number)
    {
      return ($number % 2 != 0 && !$number == 0);
    }

    /**
     * Buscar a função correta, conforme a condição, para verificar se o número é válido para ser somado
     */
    function checkCondition($number, $condition)
    {
      switch ($condition) {
        case 'impar':
          return isOdd($number);
        default:
          return false;
      }
    }

    /**
     * Realizar uma soma, a partir de 0 até determinado número, com números que atendam uma condição
     */
    function sumProgress($n)
    {
      $sum = 0;
      for ($i = 0; $i <= $n; $i++) {
        if (checkCondition($i, 'impar')) {
          $sum += $i;
        }
      }
      return $sum;
    }
    ?>

    <!-- Código para testar a função-->
    <h1>Somador</h1>
    <br />
    <?php
    echo sumProgress(10);
    ?>
  </body>
</html>