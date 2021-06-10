<?php
function cev(int $n){
    return $n/2;
}
function dividir($x, $y){
    if ($y == 0){
        throw new Exception('é uma divisão por zero');
    }
    $resultado = $x / $y;
    return $resultado;
}
//Codigo base
try{
    echo dividir(10,2), "</br>";
}catch (Exception $e){
    echo "Erro encontrado: ", $e->getMessage(), "\n";
} finally {
    echo "Finalizado";
}

?>