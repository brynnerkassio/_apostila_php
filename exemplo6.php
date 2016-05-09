<html>
<head>
<title> Teste php </title>
</head>
<body>

<?php function soma($a)
{global $b;
$b = $a + 5;

}
soma(10);
echo "o valor de 'b' é $b";

?>
</body>
</html>
