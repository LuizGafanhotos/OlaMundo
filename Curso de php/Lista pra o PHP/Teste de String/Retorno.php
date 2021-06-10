<?php
$nome = "<strong>C# é uma linguagem boa e orientada a objeto</strong>";
$conta = str_word_count($nome,0);

if ($conta == 8+2){
    echo "na variavel nome tem |=$nome=|";
    echo " e que tem $conta letras";
}else{
    print "erro";
}

?>