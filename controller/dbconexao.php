<?php
$host = "localhost";
$user = "root";
$password = "";
$banco = "crud";

$connect= mysqli_connect($host, $user, $password,$banco);
mysqli_set_charset($connect,"utf8");
if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;    