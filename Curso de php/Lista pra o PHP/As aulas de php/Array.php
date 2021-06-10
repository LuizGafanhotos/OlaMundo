<?php
/*$v = array(3,2,1,4,6);
print_r($v);
var_export($v);
var_dump($v);
*/
/*
$t = "Aqui temos um texto gigante bla bla bla me mata e de o rego do caramba a quatro e 123 Fim";
$r = wordwrap($t,7,"<br/>\n",false);
echo $r;

$nome = "  Daniel  ";
echo (strlen($nome));
$novo = ltrim($nome);
echo ($novo);
$nome = "toby fox";
print ("Seu nome: ".ucwords($nome)."<br/>");
print ("de trás pra fentre: ".strrev($nome)."<br/>");
$position = strpos($nome,"toby");
echo "A string encontrada no $position";
*/
$logo = "Curso da Udemy";
$cont = substr($logo,0,5);
echo "$cont em quaretena";
$novo = str_pad($cont,20,"  ",STR_PAD_RIGHT);
?>"