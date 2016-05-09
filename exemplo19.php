<html>
<head>
<title> teste de condição if ou else </title>
</head>
<body>

<?php
$d = getdate();

switch ($d['wday'])
{
case 5:
	echo ("finalmente sexta");
	break;
	
case 6:	
	echo ("Super sabado");
	break;
	default:
	echo ("estou esperando pelo fim da semana");
	
	
} 
?>
</body>
</html>

