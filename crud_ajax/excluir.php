<?php
//pegar os dados que vem do formulário
$idUsuario = filter_input(INPUT_GET, 'id_usuario');

//abre conexao com o banco de dados
include_once 'conexao.php';

$sql = "DELETE FROM usuario WHERE id_usuario = $idUsuario;";

//salvar
$resultado = mysqli_query($conexao, $sql);

//verifica salvamento
if ($resultado === true) {
    echo "Usuário excluído com sucesso";
} else {
    echo "Problemas ao excluir o usuário";
}