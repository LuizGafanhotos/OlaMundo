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
    <form method="post">
    A raiz quadrada!!:
    <input type="number" name="r" id="r">
    <input type="submit" value="Calcular Raiz">
    </form>


        <?php
            function raiz($v){
                $raiz = sqrt($v);
                return $raiz;
            }
            $roz = $_POST["r"] ?? 5;
            echo "Deu a raiz ". number_format(raiz($roz),1);
        ?>
    </div>
</body>
</html>