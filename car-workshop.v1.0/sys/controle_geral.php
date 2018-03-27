<?php

include_once './conexao.php';
    
session_start();


if(isset($_GET['controle_carros'])){

    include './controle_meus_carros.php';
    include './controle_todos_os_carros.php';
    
}

if(isset($_GET['controle_usuarios'])){
    
    include './controle_usuarios.php';
    include './controle_todos_os_usuarios.php.php';
        
}
