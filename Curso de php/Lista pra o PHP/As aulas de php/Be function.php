<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Leviata</title>
</head>
<body>
    <?php
    function soma(){
        $p = func_get_args();
        $tot = func_num_args();
        $s = 0;
        for ($i=0;$i<$tot;$i++){
            $s = $s + $p[$i];
        }
        return $s;
    }
    $alg = soma(3,5,7,21,31);
    echo $alg
    ?>
</body>
</html>