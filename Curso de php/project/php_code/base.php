<?php
session_start();

$categorias = [];
$categorias[] = "INFANTIL";
$categorias[] = "ADOLECENTES";
$categorias[] = "ADULTO";

$nome =  $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)){
    $_SESSION["mensagem-de-erro"] = " O nome não pode estar vazio: por favor preencha novamente";
    header('location: index.php');
    return; 
}
else if (strlen($nome) < 3){
    $_SESSION["mensagem-de-erro"] = " O nome deve conter mais de 3 caracteres: por favor preencha novamente";
    header('location: index.php');
    return;
}
else if (strlen($nome) > 40){
    $_SESSION["mensagem-de-erro"] = " O nome é absurdamente extenso: por favor preencha novamente";
    header('location: index.php');
    return; 
}
else if (!is_numeric($idade)){
    $_SESSION["mensagem-de-erro"] = " Informe um numero para a idade";
    header('location: index.php');
    return; 
}
if($idade >= 6 && $idade <= 12){
    for($l =0; $l < count($categorias); $l++){
        if ($categorias[$l] == "INFANTIL"){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. "compete na categoria " .$categorias[$l]  ;
            header('location: index.php');
            
        }
    }
}else if ($idade >= 13 && $idade <= 18){
    for($l = 0; $l < count($categorias); $l++){
        if ($categorias[$l] == "ADOLECENTES") {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. "compete na categoria " .$categorias[$l]  ;
            header('location: index.php');
            
        }
    }
}else{
    for($l =0; $l < count($categorias); $l++){
        if ($categorias[$l] == "ADULTO"){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria " .$categorias[$l]  ;
            header('location: index.php'); 
        }
    }
}

