<html>
<head>
    <title>Aula 13</title>
</head>
<body>
<div>
    <?php
        $votar = false;
        $dirigir = false;
        $ano = $_GET["ano"] ?? $_GET["ano"];
        $idade = date('Y') - $ano;
        if ($idade >= 18){
            $votar = true;
            $dirigir = true;
            echo "você é maior de idade";

        }else{
            echo "você é menor de idade";
        }

    ?>
</div>
</body>
</html>
