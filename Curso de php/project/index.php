<?php

$categorias = [];
$categorias[] = "INFANTIL";
$categorias[] = "ADOLECENTES";
$categorias[] = "ADULTO";

$nome = "Eduardo";
$idade = 18;

if($idade >= 6 && $idade <= 12){
    for($l =0; $l <= count($categorias); $l++){
        if ($categorias[$l] == "INFANTIL"){
            echo "O nadador ".$nome. "compete na categoria infantil";
        }
    }
}else if ($idade >= 13 && $idade <= 18){
    for($l = 0; $l <= count($categorias); $l++){
        if ($categorias[$l] == "ADOLECENTES"){
            echo "O nadador ".$nome. "compete na categoria adolecente";
        }
    }
}else{
    for($l =0; $l <= count($categorias); $l++){
        if ($categorias[$l] == "ADULTO"){
            echo "O nadador ".$nome. "compete na categoria adulto";
        }
    }
}