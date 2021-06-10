<html>
<head>
    <title>aula ex002</title>
    <meta name="author" content="Luiz fabiano silva samuel">
    <meta http-equiv="refresh" content="6">
</head>
<body>
<?php
    /*$n1 = $_GET["a"];
    $n2 = $_GET["b"];

    $soma = $n1 + $n2;
    echo "o resultado entre $n1 e $n2 = $soma";*/

    $v1 = $_GET["x"];
    $v2 = $_GET["y"];

    echo "o valor absoluto: ". abs($v2);
    echo "<br> potênciação: ". pow($v1,$v2);
    echo "<br>raiz quadrada: ". sqrt($v1);
    echo "<br> arrendondar: ". round($v2);
    echo "<br> parte inteira do valor: ". intval($v2);

?>
</body>
</html>