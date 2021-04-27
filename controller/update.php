<?php
//conexão
require_once 'dbconexao.php';
session_start();

if (isset($_POST['btn-cadastrar-alterar'])) :

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $sexo = mysqli_escape_string($connect, $_POST['sexo']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', email = '$email', sexo = '$sexo', telefone = '$telefone' WHERE id = '$id'";

    if (mysqli_query($connect, $sql)) :
        $_SESSION['request'] = 'success';
        $_SESSION['mensagem'] = "Alteração feita com sucesso";
        header('Location: ../index.php');
    else :
        $_SESSION['mensagem'] = "Erro ao Alterar";
        header('Location: ../index.php');
    endif;
endif;
