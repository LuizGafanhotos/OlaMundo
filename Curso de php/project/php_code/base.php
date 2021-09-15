<?php

$categorias = [];
$categorias[] = "INFANTIL";
$categorias[] = "ADOLECENTES";
$categorias[] = "ADULTO";

$nome = $_POST["nome"] ?? "Eduardo";
$idade = $_POST["idade"] ?? 7;

if (empty($nome)){
    echo "O nome não poderá ser vazio<br>";
    return;
}
if (strlen($nome) < 3){
    echo "O nome deve conter mais de 3 caracteres";
    return;
}
if (strlen($nome) > 40){
    echo "O nome é absurdamente extenso"; //Extenso pra krl mas enfim
}
if (!is_numeric($idade)){
    echo "Informe um numero para a idade";
    return;
}

if($idade >= 6 && $idade <= 12){
    for($l =0; $l <= count($categorias); $l++){
        if ($categorias[$l] == "INFANTIL"){
            echo "O nadador ".$nome. "compete na categoria infantil";
        }
    }
}else if ($idade >= 13 && $idade <= 18){
    for($l = 0; $l <= count($categorias); $l++){
        if ($categorias[$l] == "ADOLECENTES") {
            echo "O nadador " .$nome. "compete na categoria adolecente";
        }
    }
}else{
    for($l =0; $l <= count($categorias); $l++){
        if ($categorias[$l] == "ADULTO"){
            echo "O nadador ".$nome. "compete na categoria adulto";
        }
    }
}