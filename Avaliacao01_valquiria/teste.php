<?php
    class Login{
        private $matriculas = array("12345", "aaa");
        private $emails = array("piraporinha", "aaa");
        private $senhas = array("valval", "aaa");
        public $matriculaPassou = "";
        public $senhaPassou = "";
        public $emailPassou = "";

        function novoUsuario($matricula, $email, $senha){
            array_push($this->matriculas, $matricula);
            array_push($this->emails, $email);
            array_push($this->senhas, $senha);
            return true;
        }
        function login($matricula, $senha){
            for($i=0; $i<=sizeof($this->matriculas); $i++){
                if($matricula == $this->matriculas[$i]){
                    if($senha == $this->senhas[$i]){
                        $this->matriculaPassou = $this->matriculas[$i];
                        $this->senhaPassou = $this->senhas[$i];
                        $this->emailPassou = $this->emails[$i];

                        return true;
                    }
                }
            }
            return "Dados não cadastrados";
        }
        function logout($user){
            $user->matricula = "";
            $user->senha = "";
            $user->email = "";
        }
    }
    class User{
        public $matricula = "";
        public $senha = "";
        public $email = "";

        function createUser($matricula, $senha, $email){
            $this->matricula = $matricula;
            $this->senha = $senha;
            $this->email = $email;
        }
    }
?>