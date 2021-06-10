<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
    $al = isset($_GET["aluno"])?$_GET["aluno"]:0;
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $soma = ($n1 + $n2)/2;
    if ($soma < 5){
        $est = "reprovado";
    }elseif($soma >= 5 && $soma < 7){
        $est = " pra recuperação";
    }else{
        $est = "foi aprovado";
    }
    echo "o aluno: $al";
    echo "<br>a primeira nota foi $n1 e a segunda foi $n2 deu o resultado $soma";
    echo "<br>situação do aluno <strong>$est</strong>";
    ?>
</body>
</html>