<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site PHP</title>
</head>
<body>
    <div id="php">
        <?php
            function soma ($n1, $n2){
                return ($n1 + $n2) / 2;
            }
        
            $somando = soma(4,3);
            echo "A soma deu o resultado de $somando";
        ?>
    </div>
</body>
</html>