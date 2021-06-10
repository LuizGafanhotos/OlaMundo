<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../aulaPHP/_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $senhaReal = isset($_GET["sa2"])?$_GET["sa2"]:123;
        $nome = isset($_GET["nome"])?$_GET["nome"]:"uma merda";
        $senha = isset($_GET["sa"])?$_GET["sa"]:123;
        $conta = isset($_GET["email"])?$_GET["email"]:"conta123";
        $arquivo = fopen('Dados.txt','w');
        if ($arquivo == false){
          die ('Não foi possivel guardar os dados');
        }
        fwrite($arquivo,$nome);
        fwrite($arquivo,$senhaReal);
        fwrite($arquivo,$conta);       
    ?>
</div>
</body>
</html>
 