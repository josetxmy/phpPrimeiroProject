<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pessoaF
 *
 * @author admin
 */
require_once 'pessoa.php';
class pessoaF extends pessoa {
    //put your code here
    public $cpf;
    public $sexo;
    
   function pessoaF (){
        parent::pessoa();
        
        
}
    
    function getCpf() {
        return $this->cpf;
    }
    
    function getSexo() {
        return $this->sexo;
    }
    
     function setCpf($cpf): void {
         $this->cpf = $cpf;
     }
        function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    public function __toString(){
      $Pessoa = "Nome:" . $this->getNome() . "<br>"
         . "Tel:" . $this->getTelefone() . "<br>"
         . "Email:" . $this->getEmail() . "<br>"
         . "Endereço:" . $this->getEndereco() . "<br>"
         . "Cpf:" . $this->getCpf() . "<br>"
         . "Sexo:" . $this->getSexo() . "<br><br>";
      return $Pessoa;
    }
}
?>