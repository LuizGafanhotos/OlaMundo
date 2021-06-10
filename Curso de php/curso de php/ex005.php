<html>
<head>
    <title>Aula 005</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = &$a; // ou variavel $a sem o &
            $b += 5;
            print("a variavel A vale $a e a variavel B vale $b");
        ?>
    </div>
</body>
</html>