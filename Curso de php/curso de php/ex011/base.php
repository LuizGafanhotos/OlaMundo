<html lang="pt-br">
<head>
    <title>A base de tudo</title>
</head>
<body>
<?php
    $value = $_GET['v'];
    echo "O valor enviado foi o $value";
    echo "<br>E sua raiz quadrada é: ". number_format(sqrt($value),2);
?>
<a href="index.html">Voltar</a>
</body>
</html>