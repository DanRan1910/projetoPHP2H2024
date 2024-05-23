
<?php
//Entre com 10 números e armazene em um vetor. 
//Ao final o programa deverá mostrar: - quantos negativos foram digitados; - quantos positivos foram digitados; - quantos pares e ímpares. 


$num = array(-8, 9, 8, -10, 7, 6, 5, -7, 9, 3);
$positivo = 0;
$negativo = 0;
$impar = 0;
$par = 0;

for ($i = 0; $i <= 9; $i++) {
    if ($num[$i] < 0) {
    	$negativo++;
    }
}

for ($i = 0; $i <= 9; $i++) {
    if ($num[$i] > 0) {
    	$positivo++;
    }
}
for ($i = 0; $i <= 9; $i++) {
    if ($num[$i] %2 ==1) {
    	$impar++;
    }
}
for ($i = 0; $i <= 9; $i++) {
    if ($num[$i] %2 ==0) {
    	$par++;
    }
}

   echo "O total de números negativos é $negativo</br>";
   echo "O total de números positivos é $positivo</br>";
   echo "O total de números impares é $impar</br>";
   echo "O total de números pares é $par</br>";

?>