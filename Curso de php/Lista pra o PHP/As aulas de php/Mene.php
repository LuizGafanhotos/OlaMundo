<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $n = isset($_GET["v"])?$_GET["v"]:0;
    $o = isset($_GET["oper"])?$_GET["oper"]:1;
    switch ($o){
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = pow($n,3);
            break;
        case 3:
            $r = sqrt($n);
            break;
        
        
    }
    echo "o resultado da operação solicitada foi $r";
    ?>
    <a href="mene copy.html">Voltar</a>
</body>
</html>