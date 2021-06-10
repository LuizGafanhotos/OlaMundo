<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Os dados digitados</title>
</head>
<body>
<?php
    $name = isset($_GET['nome'])?$_GET['nome']: "[não informado]";
    $ano = $_GET['ano'] ?? "[não informado]";
    $sexo = $_GET['sexo'] ?? "[não informado]";
    $idade = date("Y") - $ano;
    echo "a idade de $name tem $idade anos <br>";
    if ($sexo == "on"){
        echo "seu gênero é: homem";
    }else if ($sexo == "off"){
        echo "seu gênero é: mulher";
    }

?>
</body>
</html>