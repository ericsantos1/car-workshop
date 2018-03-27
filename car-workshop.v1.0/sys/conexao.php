<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'oficina';
    $dsn = 'mysql:host='.$servidor.';dbname='.$banco;

    try{
            $conexao = new PDO($dsn, $usuario, $senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
    }catch (PDOException $error){

            echo 'Erro ao conectar o banco de dados: '.$error->getMessage();
    }
