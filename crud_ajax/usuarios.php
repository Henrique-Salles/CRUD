<?php
//abre uma conexão com o banco de dados
include_once 'conexao.php';

$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($conexao, $sql);
$usuarios = array();
while ($usuario = mysqli_fetch_array($resultado)) {
    $usuarios[] = $usuario;
}
echo json_encode($usuarios);