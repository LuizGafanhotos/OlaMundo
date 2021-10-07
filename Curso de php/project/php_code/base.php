<?php
session_start();

$categorias = [];
$categorias[] = "INFANTIL";
$categorias[] = "ADOLECENTES";
$categorias[] = "ADULTO";

$nome =  $_POST['nome'];
$idade = $_POST['idade'];

