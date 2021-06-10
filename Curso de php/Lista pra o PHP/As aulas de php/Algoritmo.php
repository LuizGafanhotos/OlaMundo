<html>
<head>
    <meta charset="UTF-8">
    <title>Prompt de comandito</title>
    <style>
        body{
            background: black;
            color:gray;
        }
        .carente{
            color: red;
        }
    </style>
</head>
<body>
    <form method="post">
        Microsoft Windows [versão 10.0.19041.450]
        (c) 2020 Microsoft Corporation. Todos os direitos reservados.
        //Aperte enter pra executar\\</br>
        </br>
        Comand:><input type="text" name="comando">


    </form>

    <?php
    $command = $_POST['comando'] ?? "Teste";
    $lista = Array("add","Test","Help","PHPINFO","soldier dance","Ip locate");

    if ($command == $lista[0]){
        echo "Adcionado</br>";
    }
    if ($command == $lista[1]){
        echo "Isso aqui é um teste tá legal</br>";
    }
    if ($command == $lista[2]){
        echo "A lista de comandos que pode dar</br>";
        echo "Infelizmente isso aqui está na versão beta então tem pouco comando</br>";
        echo "Veja a lista abaixo</br>";
        echo "******************************************************************</br>";
        $c = 0;
        while ($c <= 5){
            print_r($lista[$c]."</br>");
            $c++;
        }
    }
    if ($command ==  $lista[3]){
        print ("Informações sobre a versão do php");
        phpinfo();
    }
    if ($command == $lista[4]){
        echo "<iframe width='727' height='409' src='https://www.youtube.com/embed/2VyyCYtMGok' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
        echo "<strong class='carente'>Kazostky kick</strong>";
    }
    if ($command == $lista[5]){
        $ip =  $_SERVER['REMOTE_ADDR'];
        echo $ip;
    }


    ?>
</body>
</html>
