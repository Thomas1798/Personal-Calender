<?php
    class Usuario {
        private $nome;
        private $sobrenome;
        private $email;
        private $user;
        private $senha;
        
        function __construct(string $nome, string $sobrenome, string $email,string $user,string $senha){
            $this ->nome = $nome;
            $this ->sobrenome = $sobrenome;
            $this ->email = $email;
            $this ->user = $user;
            $this  ->senha = $senha;
             
        }
        
        public function __get($campo){
            return $this ->$campo;
        }
        
        public function __set($campo,$valor){
            return $this ->$campo = $valor;
        }
    
        public function compara(string $user,string $email,string $senha){
            return $this->user == $user && $this->email =  $email &&  $this ->senha == $senha;
        }
    }

    
?>