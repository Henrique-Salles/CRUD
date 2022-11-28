<?php

$host = 'localhost';
$username = 'root';
$passwd = '';
$dbname = 'crud_ajax';
$port = '3306';
$conexao = mysqli_connect($host, $username, $passwd, $dbname, $port);

if ($conexao === false) {
    echo "Problemas para conectar no banco. Erro: ";
    echo mysqli_connect_errno() . ": " . mysqli_connect_error();
    die;
}