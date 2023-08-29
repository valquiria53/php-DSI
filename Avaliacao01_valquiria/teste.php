<?php
    class Login{
        public $matriculas = array("12345", "aaa");
        public $emails = array("piraporinha", "aaa");
        public $senhas = array("valval", "aaa");
        public $passou = false;

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
                        $this->passou = true;
                        return true;
                    }
                }
            }
            return "Dados não cadastrados";
        }
    }
?>