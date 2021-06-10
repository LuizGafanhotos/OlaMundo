<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rato Borrachudo</title>
    <style>
        body{
            background: green;
            color: red;
        }
        a{
            background-color: red;

        }
    </style>
</head>
<body>
    <?php
    $Name = isset($_GET["Link"])?$_GET["Link"]:0;
    $anom = isset($_GET["Hack"])?$_GET["Hack"]:0;
    switch ($anom){
        case 1:
            echo "<strong>seu nome é $Name dos Anonymous</strong> </br>";
            break;
        case 2:
            echo "<strong> seu nome é $Name das MariaLab</strong> </br>";
        }
    ?>
    <a href="rato.html">Voltar</a>
</body>
</html>