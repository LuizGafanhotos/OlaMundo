<html>
<head>
    <title>Aula 010</title>
</head>
<body>
    <?php
        $ano = $_GET['an'];
        $idade = 2021 - $ano;
        echo "quem nasceu em $ano tem idade de $idade anos";
        //detalhe: nessa função de if e else pode colocar o &&, mas pra.
        //exemplificar o codigo coloquei "and"olhe a lista (&& ou and = "E" not ou ! = "Não" || ou or = "ou" e o xor)
        $tipo = ($idade >= 18 and $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo "<br>dessa forma seu voto é $tipo!";
    ?>
</body>
</html>