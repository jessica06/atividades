<?php
$media = 0;
$primeiromes = 0;
$segundomes = 0;
$terceiromes = 0;

$primeiromes = $_POST["primeiromes"];
$segundomes = $_POST["segundomes"];
$terceiromes = $_POST["terceiromes"];

$media = ($primeiromes + $segundomes + $terceiromes)/3;
echo "Sua média da conta é R$ " . $media . "<br/>";

$mediaConsumo = $media/2.50;
echo "Sua média de consumo é " . $mediaConsumo . "m³ <br/>";

echo "A previsão de sua proxima conta com o aumento da tarifa é de R$ " . ($mediaConsumo * 3.50);


?>      
