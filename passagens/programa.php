<?php

$passagens = 0;
$total = 0;

$passagens = $_POST["passagens"];

if ($passagens > 4){
	$total = ($passagens - 4)* 2.80;
	$total = $total + (4* 1.40);
}
else {
	$total = $passagens * 1.40;
}
	echo "O valor de passagens a pagar é R$ " . number_format($total, 2,",",".");
?>
