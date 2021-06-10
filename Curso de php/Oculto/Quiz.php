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
    $guri = $_POST['Res'];
    if ($guri == sqrt(81)){
        echo "Correta </br>";
        echo "<a href='Quiz2.html'>Continuar</a>";
    }elseif (empty($guri)){
        echo "você não deu sua resposta, só vai ser aceito sua resposta </br>";
        echo "<a href='Quiz.html'>Voltar</a>";
    }else{
        echo "Errada!!";
        echo "<a href='Quiz.html'>Voltar</a>";
    }
    ?>

</section>
<footer>
    <p class="orientado"> &copy; <strong>Direito autorais de| /Luiz Fabiano\ |</strong></p>
</footer>
</body>
</html>
