<?php
declare("strict_type = 1");
function validaNome(string $nome) : bool{
    if (empty($nome)){
        setarMensagemErro(" O nome não pode estar vazio: por favor preencha novamente");
        return false; 
    }
    else if (strlen($nome) < 3){
        setarMensagemErro(" O nome deve conter mais de 3 caracteres: por favor preencha novamente");
        return false;
    }
    else if (strlen($nome) > 40){
        setarMensagemErro(" O nome é absurdamente extenso: por favor preencha novamente");
        re  turn false; 
    }
    return true;
}
function validaIdade(string $idade) : bool{
    if (!is_numeric($idade)){
        setarMensagemErro(" Informe um numero para a idade");
        return false; 
    }
    return true;    
}
