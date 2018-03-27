<?php

//verifica se a variavel $_GET['id_carro'] existe
//varivel $_GET['id_carro'] vem de meus_carros.php
if(isset($_GET['id_carro'])){
    session_start();
    $_SESSION['id_carro']=$_GET['id_carro'];
}

$arquivo = $_GET['arquivo'];

//header("Location: ../index.php");
echo "<script>location='../index.php?arquivo=$arquivo';</script>";

