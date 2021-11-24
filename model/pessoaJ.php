<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pessoaJ
 *
 * @author admin
 */
require_once 'pessoa.php';

class pessoaJ  extends pessoa{
    //put your code here
    public $cnpj;
    public $nomeFantasia;
    
    public function pessoaJ() {
        parent::pessoa();
    }


    function getCnpj(){
        return $this->cnpj;
    }
    
    function getNomeFantasia(){
        return $this->nomeFantasia;
    }
    
    function setCnpj($cnpj): void{
      $this->cnpj = $cnpj;
    }
    
    function setNomeFantasia($nomeFantasia):void{
       $this->nomeFantasia = $nomeFantasia;
    }
    public function __toString(){
      $Pessoa = "Nome:" . $this->getNomeFantasia() . "<br>"
         . "Tel:" . $this->getTelefone() . "<br>"
         . "Email:" . $this->getEmail() . "<br>"
         . "Endereço:" . $this->getEndereco() . "<br>"
         . "Cnpj:" . $this->getCnpj() . "<br><br>";
      return $Pessoa;
    }
}
