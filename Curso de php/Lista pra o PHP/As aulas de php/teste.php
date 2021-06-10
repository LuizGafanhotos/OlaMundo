<html>
<head>
<?php
$ano = $_GET['an'];
$idade = 2020 - $ano;
echo "quem nasceu em $ano tem $idade ano";
$tipo = ($idade >= 18 && $idade< 65?"obrigatorio":"Nao necessario");
echo " <br>seu voto é <strong>$tipo</strong></br>";
?>
</head>
</html>