<html>
<head>
    <title>Aula de php</title>
</head>
<body>
<?php
$nA = "3";
$nB = 3;
$r = ($nA == $nB)?"SIM":"NÃO";
echo "eu sou a linguagem php, vc inseriu duas variaveis em mim, mas <br> elas são iguais em valores? $r";
$r2 = ($nA === $nB)?"SIM":"NÃO";
echo "<br>mas elas são iguais em termo: $r";
?>
</body>
</html>
