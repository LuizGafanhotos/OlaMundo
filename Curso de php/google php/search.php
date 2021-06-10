<?php
$mysql = mysqli_connect("localhost","root","","search info");
$buscar = $_POST["search"];
$res =  "SELECT * FROM compra WHERE nome LIKE '%$buscar%' LIMIT 5";
$my_result_mate = mysqli_query($mysql,$res);

while ($rows_result = mysqli_fetch_array($my_result_mate)){
    echo "Nome da loja: ". $rows_result["nome"]."<br>";
}

?>