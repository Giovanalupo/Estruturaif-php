<?php

//Variáveis 
$valor1 = 5;
$valor2= 2;
$nome1= "Robson";
$nome2= "Pedro";
$valor3= 12;
$valor4=11;

//Verificação 1 : 5 é maior que 2?
if ($valor1 > $valor2) {
    echo "$valor1 É Maior Que $valor2 <br>";
}else {
    echo"$valor1 Não É Maior Que $valor2<br>";
}
echo "<br>";

//Verificação 2: Robson é diferentre de Pedro ?
if ($nome1 != $nome2) {
    echo"Eles são diferentes! <br> ";
}else {
    echo "Eles são iguais!";
}
echo "<br>";

//Verificação 3: 12 é menor que  ou igual que 11?
if ($valor3 <= $valor4) {
    echo "$valor3 É menor que o valor $valor4 <br>" ;
}else {
    echo "$valor3 não é menor que o valor $valor4 <br>";
}

?>

