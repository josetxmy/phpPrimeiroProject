<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pessoa
 *
 * @author admin
 */
class pessoa {
    //put your code here
    public $nome;
    public $telefone;
    public $email;
    public $endereco;
    
   public function pessoa(){
}
     function getNome(){
         return $this->nome;
  }
  function getTelefone(){
         return $this->telefone;
  }
  function getEmail(){
      return $this->email;
  }
  function getEndereco(){
      return $this->endereco;
  }
  function setNome($nome): void{
      $this->nome = $nome;
  }
  function setTelefone($telefone): void{
      $this->telefone = $telefone;
  }
  function setEmail($email): void{
      $this->email = $email;
  }
  function setEndereco($endereco): void{
      $this->endereco = $endereco;
  }
  
}