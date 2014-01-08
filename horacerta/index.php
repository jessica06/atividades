<?php
date_default_timezone_set("Brazil/East"); 
echo '<meta http-equiv="refresh" content="1">';
$dataAtual = getdate();
echo "A data de hoje é ";
echo ( $dataAtual["mday"] . "/" . $dataAtual["mon"] . "/" . $dataAtual["year"] );
echo "<br/>";
$dataAtual = getdate();
echo " A hora atual ";
echo ($dataAtual["hours"]- 1 . ":" . $dataAtual["minutes"] . ":" . $dataAtual ["seconds"]);
echo "<br/>";
echo " E o Dia da Semana é ";
switch ($diaSemana = $dataAtual ["wday"]) {
	case 0;
		echo  $diaSemana = "Domingo";
			break;
	case 1;
		echo $diaSemana = "Segunda-Feira";
			break;
	case 2;
		echo $diaSemana = "Terça-Feira";
			break;
	case 3;
		echo $diaSemana = "Quarta-Feira";
			break;
	case 4;
		echo $diaSemana = "Quinta-Feira";
			break;
	case 5;
		echo $diaSemana = "Sexta-Feira";
			break;
	case 6;
		echo $diaSemana = "Sabado";
			break;

}
?>
