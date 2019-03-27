<?php
$n1 = $_POST[`num1`];
$n2 = $_POST[`num2`];
$op = $_POST[`operar`];


/*echo "numero1" .$n1;
echo "<br>numero2" .$n2;
echo "<br>operacion".$op;
*/
switch ($op) {
  case 'sum':
  echo "la suma es:".($n1+$n2);
    break;
    case 'res':
    echo "la resta es:".($n1-$n2);
      break;
    case 'mult':
      echo "la multiplicacion es:".($n1*$n2);
        break;
    case 'div':
        echo "la division es:".($n1/$n2);
          break;
    case 'pot':
          echo "la potencia es:".($n1*$n2);
            break;
    case 'raiz':
            echo "la raiz es:".($n1*$n2);
              break;

  default:
    echo "opcion incorrecta";
    break;
}
 ?>
