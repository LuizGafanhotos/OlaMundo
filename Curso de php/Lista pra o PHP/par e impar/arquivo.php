<?php
$par = isset($_GET["bota1"])?$_GET["bota1"]:0;
$impar =  isset($_GET["bota2"])?$_GET["bota2"]:0;

if ($par == "PAR"){
    echo "Valores pares <br>";
    $c = 0;
    do{
        echo $c."<br/>";
        $c += 2;
    }while($c <= 20);
}else{
    echo "valores impar <br>";
    $c = 1;
    do{
        echo $c."<br/>";
        $c += 2;
    }while($c <=25);
}
?>
<a href="piada.html">Voltar</a>