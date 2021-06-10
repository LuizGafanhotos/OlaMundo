<?php
$num = isset($_GET['v'])?$_GET['v']:0;
switch ($num){
    case 1:
        echo "Acertou !!";
        break;
    case 2:
        echo "Errou !!";
        break;
    case 3:
        echo "Errou !!";
        break;
}

?>
