<?php

session_start();

if(isset($_GET['adicionar_carro'])){
    
    include_once 'conexao.php';
    
    $dono_id = $_SESSION['id_usuario'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $cor = $_POST['cor'];
    $data_da_compra = $_POST['data_da_compra'];
    $combustivel = $_POST['combustivel'];
    $ano = $_POST['ano'];
    
            $inserir = $conexao->prepare("INSERT INTO carros VALUES('',?,?,?,?,?,?,?,?)");
            $inserir->bindValue(1,$dono_id);
            $inserir->bindValue(2,$modelo);
            $inserir->bindValue(3,$placa);
            $inserir->bindValue(4,$cor);
            $inserir->bindValue(5,$data_da_compra);
            $inserir->bindValue(6,$combustivel);
            $inserir->bindValue(7,$ano);
            $inserir->bindValue(8,utf8_decode("Sem Serviço"));
            
            if($inserir->execute()==true){echo'ok';}else{echo'erro';}
            
}

if(isset($_GET['meus_carros'])){
    
    include_once 'conexao.php';
        
    $usuario = $_GET['usuario'];
    
    $carros = array();
    
    $pega_carro = $conexao->prepare("SELECT * FROM carros WHERE dono_id = ?");
    $pega_carro->execute(array($usuario));
    if($pega_carro){
        while ($row = $pega_carro->fetch()) {
                       
            $carros[] = array(                
                        "id_carro"=>$row['id_carro'],
                        "dono_id"=>$row['dono_id'],
                        "cor"=>  utf8_encode($row['cor']),
                        "modelo"=>  utf8_encode($row['modelo']),
                        "cor"=>  utf8_encode($row['cor']),
                        "ano"=> utf8_encode($row['ano']),
                        "placa"=> utf8_encode($row['placa']),
                        "servico_status"=> utf8_encode($row['servico_status'])            
                        );
            
        }
        die(json_encode($carros));
    }else{
        echo 'erro';
    }
}

if(isset($_GET['editar_carro'])){
        
    
    
}

if(isset($_GET['remover_carro'])){
        
    
    
}

if(isset($_GET['agendar_serviço'])){
        
    
    
}

if(isset($_GET['editar_serviço'])){
        
    
    
}

if(isset($_GET['cancelar_serviço'])){
        
    
    
}