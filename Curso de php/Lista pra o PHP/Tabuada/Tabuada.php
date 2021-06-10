<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css"/>
    <title>Document</title>
</head>
<body>
    <?php
    $calc = isset($_GET["num"])?$_GET["num"]:0;
    for ($c = 1; $c <= 10; $c++){
        $r = $calc * $c;
        echo "$calc x $c = $r </br>";
    }
    ?>
    <a href="Tabu.php" class="botao">Voltar</a>
</body>
</html>