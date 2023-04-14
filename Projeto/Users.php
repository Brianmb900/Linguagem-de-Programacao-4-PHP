<?php
    // Criado em 30/11/2022 - Atualiziado em 01/12/2022
    /* Este programa implemente a classe Users que será usada parar manipular os usuário 
    (Que pelo bem projeto não está manipulando).*/

    class Users{
        # propriedades
        private $id;
        private $name = "Brian M. Bianchini";
        private $email;
        private $pass;
        
        // Construtor da Classe
        function __construct($id, $name, $email, $pass){
            $this->$id = $id;
            $this->$name = $name;
            $this->$email = $email;
            $this->$pass = $pass;
        }
        
        #Método para exibir quem é o usuário.
        public function whoIAm(){
            echo "Eu sou o usuário: " . $this->name;
        }
    } 
?>