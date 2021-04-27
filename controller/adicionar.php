<?php
//conexão
require_once 'dbconexao.php';
session_start();

if (isset($_POST['btn-cadastrar'])) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $sexo = mysqli_escape_string($connect, $_POST['sexo']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);

    $sql = "INSERT INTO clientes(nome, email, sexo, telefone) VALUES ('$nome','$email', '$sexo', '$telefone')";

    if (mysqli_query($connect, $sql)) :
        $_SESSION['request'] = 'success';
        $_SESSION['mensagem'] = "Castrado feito com sucesso";
        header('Location: ../index.php');
    else :
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('Location: ../index.php');
    endif;
endif;
