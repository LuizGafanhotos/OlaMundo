<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caneta PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once "Banco.php";
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            $p1->abrirConta("CC");
            $p1->setnumConta(1111);
            $p1->setDono("Jubileu");
            $p2->setnumConta(2222);
            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            print_r($p1);
            print_r($p2);
        
        ?>
    </pre>
</body>
</html>