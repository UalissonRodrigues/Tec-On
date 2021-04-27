<?php
//conexão
require_once 'dbconexao.php';
session_start();

if (isset($_POST['btn-deletar'])) : {
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "DELETE  FROM clientes WHERE id = '$id'";
        $dados = mysqli_query($connect, $sql);

        if ($dados) :
            $_SESSION['request'] = 'success';
            $_SESSION['mensagem'] = "Delete feito com sucesso";
            header('Location: ../index.php');
        else :
            $_SESSION['request'] = 'error';
            $_SESSION['mensagem'] = "Não foi possivel Deletar, Contate o Administrador do Sistema";
            header('Location: ../index.php');
        endif;
    }
endif;
