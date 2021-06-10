
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Num sei</title>
</head>
<body>
<div>
    <pre>
        <table border="1"><tr>
        <?php
        $cont = range(5,20,2);

        foreach ($cont as $valor){
            echo "<td>$valor";
        }
        ?>
        </table></tr>
    </pre>
</div>
</body>
</html>

