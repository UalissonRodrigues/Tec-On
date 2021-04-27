<?php
//conexão
require_once 'dbconexao.php';

if (isset($_POST['btn-registrar'])) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $senhacrip = password_hash($senha, PASSWORD_DEFAULT); // Cripitografando a senha antes de inserir no banco

    $sqlemail = mysqli_query($connect, "SELECT * FROM clientes_registro WHERE email = '$email'");

    if (mysqli_num_rows($sqlemail) > 0) :
        $_SESSION['request'] = 'error';
        $_SESSION['mensagem'] = "Email já cadastrado";
        header('Location: ../views/registro.php');
    else :
        $sql = " INSERT INTO clientes_registro(nome, sobrenome, telefone, email, senha) VALUES ('$nome','$sobrenome', '$telefone', '$email', '$senhacrip')";

        if (mysqli_query($connect, $sql)) :
            $_SESSION['request'] = 'success';
            $_SESSION['mensagem'] = "Castrado feito com sucesso";
            header('Location: ../views/login.php');
        else :
            $_SESSION['mensagem'] = "Erro ao Cadastrar";
            header('Location: ../views/registro.php');

        endif;
    endif;
endif;
