<?php
$contagem = 0;
$chocolateBranco = 0;
$chocolateEscuro = 0;
$promoB = 0;
$promoE = 0;

$chocolateBranco = $_POST["chocolateBranco"];
$chocolateEscuro = $_POST["chocolateEscuro"];

$contagem = 3;
while($contagem <= $chocolateEscuro) {
	$promoB = $promoB + 1;
	$contagem = $contagem + 3;
}

$contagem = 2;
while($contagem <= $chocolateBranco) {
	$promoE = $promoE + 1;
	$contagem = $contagem + 2;
}

$contagem = 5;
while($contagem <= $chocolateEscuro + $chocolateBranco) {
	$promoB = $promoB + 1;
	$contagem = $contagem + 5;
}


echo " A quantidade de chocolate escuro é ";
echo $chocolateEscuro + $promoE;
echo "<br/>";
echo " A quantidade de chocolate branco é ";
echo $chocolateBranco + $promoB;

?>
