<html>
<head>
    <title>Aula 003</title>
    <meta name="author" content="Luiz fabiano silva">
    <meta name="description" content="Curso de php">
    <style>
        h1{
            color: #cd0808;
            text-align: center;
        }
        section{
            background-color: #81c5f1;
            box-shadow: 13px 12px 10px black;
            text-align: center;
            font-family: "Fira Code Retina";
        }
    </style>
</head>
<body>
<h1>O REI DO CAPITALISMO</h1>
<section>
<?php
    $prize = $_GET["p"];
    echo "O preço do produto: R$ ". number_format($prize,2);
    $prize += ($prize * 10 / 100);
    $prize2 = $prize - ($prize * 10 / 100);
    echo "<br>com o novo preço de 10% de aumento fica: ". number_format($prize,2);
    echo "<br> com o novo preço de 10% de desconto fica: ". number_format($prize2,2);


?>
</section>
</body>
</html>