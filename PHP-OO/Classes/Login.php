<?php
class Login(){
    //Definição de variaveis
    private $email;
    private $senha;
    //Getters 
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    //Setters 
    public function setEmail($e){
        $filteredEmail = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $filteredEmail;
    }
    public function setSenha($s){
        this->senha = $s
    }
    //Métodos
    public function Logar(){
        if($this->email == 'luiz@luiz.com' and strlen($this->senha) >= 8):
            header('location: ../pages/home.php');
        else:
            echo 'Dados inválidos, verifique email e senha';
        endif;
    }
}
?>