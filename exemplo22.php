<html>
<head>
<title> calendario </title>
</head>
<body>

<?php
$meses = array (1 => "Janeiro",
				2 => "Fevereiro",
				3 => "Março",
				4 => "Abril",
				5 => "Maio",
				6 => "Junho",
				7 => "Julho",
				8 => "Agosto",
				9 => "Setembro",
				10 => "Outubro",
				11 => "Novembro",
				12 => "Dezembro");
				
				
				
$hoje = getdate();
$dia = $hoje["mday"];
$mes = $hoje["mon"];
$nomeMes = $meses[$mes];
$ano = $hoje["year"];
echo "ola. Hoje é dia $dia de $nomeMes de $ano."

?>
</body>
</html>
