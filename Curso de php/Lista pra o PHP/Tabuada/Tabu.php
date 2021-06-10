<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css"/>
    <title>Uma tabuada</title>
</head>
<body>
    <form method="get" action="Tabuada.php">
        <select name="num">
        <?php
        for($c = 1; $c <= 10; $c++){
            echo "<option>$c</option>";
        }
        ?>
        </select>
        <input type="submit" value="Ver Tabuada">
    </form>
</body>
</html>