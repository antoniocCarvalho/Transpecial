<?php
    // Inicia uma nova sessão ou retoma a sessão existente
    session_start();

    include "connect.php";
    
    $cpf = $_POST['cpf']; // Obtém o CPF do formulário de login usando o método POST
    $senha = $_POST['senha']; // Obtém a senha do formulário de login usando o método POST

     /**
     * Função _login: Verifica se o usuário com o CPF e a senha fornecidos existem no banco de dados.
     *
     * @param {string} $login - CPF do usuário.
     * @param {string} $senha - Senha do usuário.
     */
    function _login($login, $senha){

        // Permite o acesso à variável de conexão 
        global $conn; 

        // Consulta o banco de dados para verificar se o usuário com o CPF e a senha fornecidos existem.
        $sql = "SELECT * FROM usuario WHERE cpf = ? AND senha = ?";
        $stmt = $conn->prepare($sql);
    
        // Associa os parâmetros da consulta aos valores recebidos da função
        $stmt->bind_param("ss", $login, $senha); 
        
        // Executa a consulta preparada
        $stmt->execute();
    
        // Obtém o resultado da consulta
        $result = $stmt->get_result(); 
    
        // Verifica se há mais de 0 linhas no resultado
        if ($result->num_rows > 0) {
         // Loop através dos resultados e configura as variáveis de sessão do usuário    
        while ($row = $result->fetch_assoc()) {
            // Exibe  informações do usuário
            echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";

            // Configura as variáveis de sessão com as informações do usuário
            $_SESSION['idUsuario']       = $row["id"];
            $_SESSION['usuario']         = $row["nome"];
            $_SESSION['logado']          = true;
            $_SESSION['enderecoUsuario'] = $row["enderecoRes"];
            
            // Redireciona o usuário para a página de agendamento após o login bem-sucedido
            header("Location: agendar.php");
        }
        } else {
             // Se nenhum resultado for encontrado, exibe uma mensagem de erro
            echo "Nenhum resultado encontrado.";
        }
    
        // Fecha a conexão com o banco de dados
        $conn->close();
    
    }

     // Chama a função de login com os dados do formulário
    _login($cpf, $senha);
?>
