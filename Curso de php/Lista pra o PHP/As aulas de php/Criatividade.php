<?php
$A = Array("Daniel","Mariana","Eduarda","Zé droguinha","ECT");
$B = Array("html","PHP","JAVA","KOTLIN","python","C#");
$c = 0;
$c2 = 0;

do{
    print_r($A[$c]."</br>");
    $c++;
}while($c <= 4);
echo "<strong>Linguagem de programação</strong>";
do{
    print_r($B[$c2]."</br>");
    $c2++;
}while($c2 < 6);

?>
