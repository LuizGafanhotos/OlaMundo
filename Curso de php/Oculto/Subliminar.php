<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perguntas</title>
    <link rel="stylesheet" href="Modelo.css">
</head>
<body>
<header>
    <h1>Sua reposta está..</h1>
</header>
<section>
    <?php
    $nome = "Luiz fabiano";
    $segredo = $_POST['Dados'];
    if ($segredo == strtoupper($nome) or $segredo == strtolower($nome) or $segredo == "Luiz Fabiano"){
        printf ("se sua resposta foi %s você acertou", $segredo);
        echo "<a href='Quiz4.html'>Continuar</a>";
    }elseif (empty($segredo)){
        echo "você não digitou seus dados, volte e vá escrever sua resposta";
    }else{
        echo "Errada!!";
        echo "<a href='Easter_egg.html'>Voltar</a>";
    }

    ?>

</section>
<footer>
    <p class="orientado"> &copy; <strong>Direito autorais de| /Luiz Fabiano\ |</strong></p>
</footer>
</body>
</html>

