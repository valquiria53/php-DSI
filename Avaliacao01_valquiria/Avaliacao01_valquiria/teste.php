<?php

class Login {

    //propriedades
    private $registros = array(
        array('matricula'=>'12345', 'email'=>'a@a', 'senha' => '1234'),
        array('matricula'=>'12345e', 'email'=>'a@a', 'senha' => '1234'),
        array('matricula'=>'12345r', 'email'=>'a@a', 'senha' => '1234'),
        array('matricula'=>'12345f', 'email'=>'a@a', 'senha' => '1234')
    );
    
    public $matriculaPassou = "";
    public $senhaPassou = "";
    public $emailPassou = "";
    //métodos
    public function getRegistros() {
        return $this->registros;
    }

    public function getMatriculaPassou() {
        return $this->matriculaPassou;
    }

    public function getSenhaPassou() {
        return $this->senhaPassou;
    }

    public function getEmailPassou() {
        return $this->emailPassou;
    }

    public function setRegistros($registros): void {
        $this->registros = $registros;
    }

    public function setMatriculaPassou($matriculaPassou): void {
        $this->matriculaPassou = $matriculaPassou;
    }

    public function setSenhaPassou($senhaPassou): void {
        $this->senhaPassou = $senhaPassou;
    }

    public function setEmailPassou($emailPassou): void {
        $this->emailPassou = $emailPassou;
    }

        
    public function __construct() {
        
    }

     public   function novoUsuario($matricula, $email, $senha) {
        $novoRegistro = array('matricula'=> $matricula, 'email'=> $email, 'senha'=>$senha);
        array_push($this->registros, $novoRegistro);
        return true;
    }

    public function login($matricula, $senha) {
        $passou = 'false';
        
        //print_r($this->registros);
        
       foreach ($this->registros as $registro) {
            if ($matricula == $registro['matricula'] && $senha == $registro['senha']) {
                $passou = 'true';
                
                $this->matriculaPassou = $matricula;
                $this->senhaPassou = $senha;
                $this->emailPassou = $registro['email'];
                break;
            }
        }
        return $passou;
    }
        

    function logout($user) {
        $user->matricula = "";
        $user->senha = "";
        $user->email = "";
    }

}

class User {

    public $matricula = "";
    public $senha = "";
    public $email = "";

    public function __construct() {
        
    }

    
    public function createUser($matricula, $senha, $email) {
        $this->matricula = $matricula;
        $this->senha = $senha;
        $this->email = $email;
    }

}

?>