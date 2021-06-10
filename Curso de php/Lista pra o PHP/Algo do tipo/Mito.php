<?php
$mito = "Zs";
$mito2 = "As";
$mito3 = "Pose";

function Mitology(){
    echo "<label for='Zs'>Zeus</label>";
}
function Mitology2(){
    echo "<label for='As'>Ares</label>";
}
function Mitology3(){
    echo "<label for='Pose'>Poseidon</label>";
}
echo "<form method='get' action='Ola.php'>";
echo "<input type='radio' name='var' id='$mito' value='1'>";
Mitology();
echo "<input type='radio' name='var' id='$mito2' value='2'>";
Mitology2();
echo "<input type='radio' name='var' id='$mito3' value='3'></<br>";
Mitology3();
echo "<input type='submit' value='Clique'>";
echo "</form>";


?>
