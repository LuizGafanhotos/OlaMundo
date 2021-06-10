<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $valor = $_GET['v'];
    echo "o valor digitado é $valor";
    $Raiz = sqrt($valor);
    echo "e sua raiz quadrada é  ". number_format($Raiz,2);
    ?>
    <a href="Mene.html" ><br>Voltar</br></a>
</body>
</html>