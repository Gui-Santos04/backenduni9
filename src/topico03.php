<?php

use BcMath\Number;

$cep="01012123";
echo "cep = $cep";
$valor=5124.784;
echo "<br>valor = $valor";
echo "<br>R$ ".number_format($valor,2,",",".");
echo "<br>R$ ".number_format($valor,0,",",".");

$nome = "bete";
echo"<br>Nome = $nome";
echo'<br>Nome = $nome';
$cor="green";
echo "<p style='color:$cor'>$nome</p>";

$novo_valor = (int)$valor;

$decimal=$valor-$novo_valor;
echo "$novo_valor";
echo "<br>".number_format($decimal,3);
define("PI",3.1415);
echo"<br>PI=".PI;

?>