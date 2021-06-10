<?php
//Conexão com banco de dados
$mysql = mysqli_connect("localhost","root","","politico");
if (!$mysql){
    die("Connection failed: " . mysqli_connect_error());
}
//Variaveis
$nome = $_POST['nome'];
$idade = $_POST['id'];
$nasc = $_POST['nasc'];
$email = $_POST['email'];


//Função agora\\
mysqli_query($mysql,"INSERT INTO presidentes VALUES ('$nome','$idade','$nasc','$email')");

sleep(0.6);
echo "Seu cadastro foi feito com sucesso";
echo "<a href='Base%20de%20tudo.php'>Ir direto</a>";


?>
