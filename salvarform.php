<?php
include_once 'conexao.php';
try{
    $query = $db->prepare('INSERT INTO email (email) VALUES(?)');
    $resultado = $query->execute([$_POST['exampleInputEmail1']]);
    
    
    if($resultado){
        echo "<h1>Cadastro concluido!</h1>";
    }else{
        "<h1>Cadastro concluido!</h1>";
    }
    }catch(PDOExecption $ex){
        echo "Serviço indisponivel!";
    }
    

