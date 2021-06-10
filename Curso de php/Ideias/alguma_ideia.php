<html>
<head>
    <title>Ola mundo</title>
</head>
<body>
    <form method="post">
        <input type="number" name="N">
        %
        <input type="number" name="N2">
        <input type="submit" value="Calcular">
    </form>

    <?php
    //isset($_POST['N'])?$_POST['N']:5
    $Numero = $_POST['N'] ?? 3;
    $Numero2 = $_POST['N2'] ?? 3;
    $result = $Numero / $Numero2;
    $result2 = $Numero % $Numero2;
    echo "Esse é o resultado de sua conta $result e o resto é $result2";

    ?>
</body>
</html>
