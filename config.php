<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $corretor = $_POST['corretor'];
    $cliente = $_POST['cliente'];
    $telefone = $_POST['telefone'];
    $fixo = $_POST['fixo'];
    $endereco = $_POST['endereco'];
    $dia = $_POST['dia'];

    $db_host = 'localhost';
    $db_user = 'root';
    $db_senha = '';
    $db_banco = 'imobiliaria';


    $con = mysqli_connect($db_host, $db_user, $db_senha, $db_banco);

    if (!$con)
    {
        die("Conexão caiu" .mysqli_connect_error());
    }

    $sql = "INSERT INTO clientes (corretor, cliente, telefone, fixo, endereco, dia) VALUES ('$corretor', '$cliente', '$telefone', '$fixo', '$endereco', '$dia')";

    $rs = mysqli_query ($con, $sql);

    if ($rs) 
    {
        echo "Cliente cadastrado";
    } else {
        echo "Cliente não cadastraod";
    }

}

?>