<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $a = isset($_GET["ano"])?$_GET['ano']:1900;
    $id = date('Y') - $a;
    print "voce nasceu em $a <br>então provalvelmente você tem $id</br>";
    if($id < 16){
        $v = "não pode votar";
        echo $v;
    }else{
        if (($id >= 16 && $id < 18 || ($id>65))){
            echo "voto opicional";
        }else{
            echo "voto obrigatório";
        }
    }
    
    ?>
    <a href="arquivo.html">Voltar</a>
</body>
</html>