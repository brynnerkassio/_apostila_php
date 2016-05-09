<html>
<head>
<title> codigo constante </title>
</head>
<body>

<?php
function calculaAreaCirculo ($raio)
{
	return M_PI *pow($raio,2);
	
}
$meuRaio = 5;
$area = calculaAreaCirculo ($meuRaio);
echo "<b>Raio</b> = $meuRaio<br>";
echo "<b>Area</b> = area";

?>
</body>
</html>