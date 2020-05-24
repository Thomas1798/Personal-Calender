<?php 
   require 'Usuario.php';
  $array = array();
   session_start();
    

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    if(isset($_POST['entrar'])){
      echo "beleza";

      
      
      if(isset($_SESSION['users'])){
        echo "belezakr";

        
        foreach($_SESSION['users'] as $use){
           if($use->user == $_POST['usuario'] && $use->senha == md5($_POST['password']) ){
             echo"ejtr09da";
              $_SESSION['user'] = $use;
              header('Location: ../calendario/index.html');
            break; 
          }
        }
        echo "senha/usuario incorreto";
      }
     
  }
    
  if(isset($_POST['cadastrar'])){
    $cria = true;   
      if (!isset($_SESSION['users'])){
        $_SESSION['users'] = array();
      }
      
      foreach($_SESSION['users'] as $users){
        if($users->user == $_POST['user'] || $users->email == $_POST['email'] ){
            echo "usuario ja cadastrado";
            $cria = false;

        break;
        }
      }
      if($cria==true){
      $user = new Usuario($_POST['nome'],$_POST['email'],$_POST['user'],md5($_POST['senha']));
      array_push($_SESSION['users'],$user);
      echo "usuario cadastrado";

      foreach($_SESSION['users'] as $us){
        echo $us->nome;
      }
    }
  }else{
    echo 'deu nao pae';
  }
  
  
?>