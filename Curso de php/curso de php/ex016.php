<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div>
        <?php
            function receba($n1, $n2){
                return ($n1 + $n2);
            }


            $vetor = [1,2,3,4,5,6];
            for ($i = 0; $i <= 5; $i++){
                echo "$vetor[$i]° -> posição <br>";
            }
            $soma = receba(5,5);
            echo "EU SOMEI OS VALORES, O RESULTADO FOI: $soma"
            
        ?>
    </div>
</body>
</html>