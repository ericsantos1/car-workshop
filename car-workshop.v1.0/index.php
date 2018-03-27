<?php
error_reporting(0);

    session_start();
    
    if(!isset($_SESSION["tipo"])){
        //include login
        include './visao/login_v2.html';
    }else{
           
           if(!isset($_GET['arquivo'])){
                //cria a session
                $_GET['arquivo']='index.php';
                //include login
                include 'visao/'.$_GET['arquivo'];
            }  else{
                include 'visao/'.$_GET['arquivo'];
            }
    
    }
   

?>
