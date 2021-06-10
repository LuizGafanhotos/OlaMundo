<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perguntas</title>
    <link rel="stylesheet" href="Modelo.css">
</head>
<body>
<header>
    <h1>Sua resposta está...</h1>
</header>
<section>
    <?php
    $Fim = $_GET['Ole'];
    switch($Fim){
        case 1:
            echo "Errada!!";
            echo "<a href='Quiz4.html'>Voltar</a>";
            break;
        case 2:
            echo "Correta!! </br>";
            echo "<a href='Quiz5.html'>Continuar</a>";
            break;
        case 3:
            echo "Errada!!";
            echo "<a href='Quiz4.html'>Voltar</a>";
            break;
        case 0:
            echo "Houve um erro, Retorne pra ver se vc mandou a reposta </br>";
            echo "<a href='Quiz4.html'>Voltar</a>";
    }

    ?>
</section>
<footer>
    <p class="orientado"> &copy; <strong>Direito autorais de| /Luiz Fabiano\ |</strong></p>
</footer>
</body>
</html>
