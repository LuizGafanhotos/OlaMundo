<?php
declare("strict_type = 1");
function validaNome(string $nome) : bool{
    if (empty($nome)){
        $_SESSION["mensagem de erro"] = " O nome não pode estar vazio: por favor preencha novamente";
        return false; 
    }
    else if (strlen($nome) < 3){
        $_SESSION["mensagem-de-erro"] = " O nome deve conter mais de 3 caracteres: por favor preencha novamente";
        return false;
    }
    else if (strlen($nome) > 40){
        $_SESSION["mensagem-de-erro"] = " O nome é absurdamente extenso: por favor preencha novamente";
        return false; 
    }
    return true;
}
function validaIdade(string $idade) : bool{
    if (!is_numeric($idade)){
        $_SESSION["mensagem-de-erro"] = " Informe um numero para a idade";
        return false; 
    }
    return true;    
}
