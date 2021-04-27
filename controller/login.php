<?php
//conexão
require_once 'dbconexao.php';

if (isset($_POST['btn-entrar'])) :  // Clicou no botão enivar
    $erros = array();  // Array de Erros.
    $login = mysqli_escape_string($connect, $_POST['Email']); // Pegando o que esta vindo do form e colocando na variavele utilizando o filtro
    $senha = mysqli_escape_string($connect, $_POST['Password']); // Pegando o que esta vindo do form e colocando na variavel utilizando o filtro   

    if (empty($login) or empty($senha)) :  // Verificando se os campos estão preenchidos
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else :

        $sql = "SELECT email,senha FROM clientes_registro WHERE email = '$login'"; // Se tiver preenchido faz o select para pegar os dados
        $resultado = mysqli_query($connect, $sql); // Coloca os dados na variavel         

        if (mysqli_num_rows($resultado) > 0) :   // Verifica se esta vindo mais de uma linha na variavel $resultado
            $dados = mysqli_fetch_array($resultado);  // variavel dados rescebe os as linhas do resultado
            if(password_verify($senha , $dados['senha'])): // verifica se a senha cripitografada é a mesma que esta no banco
                mysqli_close($connect); // apos pegar os dados encerra a conexão
                $login = $dados['email']; // pega o email que quem esta tentando fazer o login
                session_start();
                $_SESSION['email'] = $login;
                header('Location: ../views/index.php'); // redireciona para nova pagina com  a sessão logado.
            else :
                $erros[] = "<li> Usuario e Senha invalidos! </li>";
            endif;

        else :
            $erros[] = "<li> Usuario inexistente </li>";
        endif;
    endif;
    if (!empty($erros)) :
        foreach ($erros as $erro) :
            echo $erro;
        endforeach;
    endif;

endif;
