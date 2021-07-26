<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO/php</title>
</head>
<body>
    <pre>
        <?php
            require_once "Classe.php";
        
            $c1 = new Caneta();

            $c1->setModelo("BIC");
            $c1->setPonta(1.5);
            print_r($c1);
        ?>
    </pre>
</body>
</html>