<html>
<head>
    <title>Ola</title>
</head>
<body>
<h1>Digite uma frase qualquer</h1>
<?php
$c = 1;
do{
    echo "<form method='post' action='Envio.php'>";
    echo "<input type='text' name='Ne' >";
    $c++;
}while($c <= 1);
echo "<input type='submit' value='Verificar'>";
echo "</form>";
?>
</body>
</html>