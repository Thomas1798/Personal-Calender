<?php 
    class Operacao{
        private $loggedUser;

        public function cadastrar(){
            if($_SERVER['REQUEST METHOD'] == 'POST'){
                if(!isset($_SESSION['users'])){
                    $_SESSION['users'] = array();
                }
                foreach($_SESSION['user'] as $user){
                    if($user->email == $_POST['email']){
                        echo "email cadastrado";
                        return;
                    }
                }

                $user = new Usuario ($_POST['nome'],$_POST['sobrenome'],$_POST['email'],$_POST['user'],$_POST['senha']);
                echo "cadastro com sucesso";
                return;
            }
        }
    } 
?>