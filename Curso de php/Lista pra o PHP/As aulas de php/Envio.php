<?php
$O_valor = isset($_POST['Ne'])?$_POST['Ne']:"Maninho";
if ( ! empty( $O_valor ) ) {
    // O resto do nosso código virá aqui
    echo "$O_valor";
} else {
    // Se nada for postado, aparece a mensagem
    echo 'Nada foi postado.';
}

?>
