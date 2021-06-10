<?php
$gregos = isset($_GET['var'])?$_GET['var']:0;
switch ($gregos){
    case 1:
        echo "<h1>Zeus é o Senhor dos Céus e Deus Supremo da mitologia Grega. Filho mais novo de Cronos, Rei dos Titãs, e Rhea (Réia), nasceu no Monte Ida, Ilha de Creta. Conhecido pelo nome Romano de Júpiter, tinha como irmãos Poseidon, Hades, Deméter, Héstia e Hera</h1>";
    case 2:
        echo "<h1>é um deus grego, filho do rei e rainha dos deuses, Zeus e Hera na antiga religião grega. O culto de Ares não foi muito grande, sendo centrado na região norte da Grécia e em Esparta, uma das mais importantes cidades-estados da Grécia Antiga.</h1>>";
    case 3:
        echo "<h1>Poseidon é o deus dos mares, dos oceanos, das tempestades, dos lagos e dos cavalos de acordo com a mitologia grega. Um entre os doze deuses gregos olímpicos, ele é o filho dos titãs Cronos e Reia e a principal divindade adorada nas cidades de Pilos</h1>";
}
?>