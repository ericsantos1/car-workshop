<?php

    include_once './conexao.php';
    
    session_start();
    
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
            
        try {
            $listar = $conexao->prepare('SELECT * FROM usuarios WHERE cpf = ? AND senha = ?');
            $listar->bindValue(1,$cpf);
            $listar->bindValue(2,$senha);
            $listar->execute();
            
            if($listar->rowCount() > 0){
                
                $array_usuario = $listar->fetch(PDO::FETCH_ASSOC);
                
                $_SESSION["id_usuario"] = $array_usuario['id_usuario'];
                $_SESSION["nome"] = $array_usuario['nome'];
                $_SESSION["sobre_nome"] = $array_usuario['sobre_nome'];
                $_SESSION["tipo"] = $array_usuario['tipo'];  
                
                echo "<script>location='../';</script>";   
                
            }  else {
                echo "Usuário não cadastrado, verifique se não errou.";
            }
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
        
    
    
    
    
    

