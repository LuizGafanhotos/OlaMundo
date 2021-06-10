<html>
<head>
    <title>Aula 007</title>
    <meta name="author" content="Luiz fabiano silva">
    <meta name="description" content="Aula de php">
    <meta http-equiv="refresh" content="7">
</head>
<body>
<?php
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$tipo = $_GET["op"];
echo "o valor foi $n1 e $n2<br>";
$r = ($tipo == "s" || $tipo == "S")?$n1+$n2:$n1*$n2;
echo "somamos e o resultado é $r"

?>
</body>
</html>