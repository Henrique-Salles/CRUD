<?php
//pega os dados que vem do ajax
$idUsuario = filter_input(INPUT_POST, 'id_usuario');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

//abre conexão com o banco de dados
include_once 'conexao.php';

if ($idUsuario == '') {
    //cria comando pra salvar
    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha');";
} else {
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha' WHERE id_usuario = $idUsuario;";
}

//salvar
$resultado = mysqli_query($conexao, $sql);

//verificar se foi salvo
if ($resultado === true) {
    echo "Usuário salvo com sucesso!";
} else {
    echo "Problemas ao salvar o usuário !"; 
}



