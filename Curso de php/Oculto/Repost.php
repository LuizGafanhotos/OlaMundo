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
    $gari = $_POST['Res2'];
    if ($gari == "Gaia" || $gari == "gaia"){
        echo "Correta";
        echo "<a href='Quiz3.html'>Continuar</a>";
    }elseif (empty($gari)){
        echo "você não deu sua resposta, só vai ser aceito sua resposta </br>";
        echo "<a href='Quiz2.html'>Voltar</a>";
    }else{
        echo "Errada!!";
        echo "<a href='Quiz2.html'>Voltar</a>";
    }
    ?>

</section>
<footer>
    <p class="orientado"> &copy; <strong>Direito autorais de| /Luiz Fabiano\ |</strong></p>
</footer>
</body>
</html>
