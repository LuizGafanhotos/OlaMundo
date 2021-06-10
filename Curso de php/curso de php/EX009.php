<html>
<head>
    <title>aula 009</title>
</head>
<body>
<?php
$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$calc = ($nota1 + $nota2) / 2;
print("a conta de $nota1 e $nota2 se resultou em $calc <br>");
echo "O nosso querido aluno está". (($calc<6)?"REPROVADO":"APROVADO");
?>
</body>
</html>
