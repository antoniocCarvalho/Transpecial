<?php

    $servername = "localhost";  // nome do servidor MySQL
    $port       = 3306;
    $username   = "root";       // nome de usuário do MySQL
    $password   = "123"; // senha do MySQL
    $dbname     = "transPecial";    // nome do banco de dados

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

?>