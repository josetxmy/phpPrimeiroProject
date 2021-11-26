<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
        // put your code here
        require_once '../controller/cPessoaF.php';
        $gerPF= new cPessoaF();
        ?>
        
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ger: pessoa fisica</title>
    </head>
    <body>
        <h1>Ger: Pessoa Fisica</h1>
        <a href="../indexx.php">voltar</a> 
        <br><br>
        <form action="<?php $gerPF->SalvarBD(); ?>" method="POST">
       <input placeholder="Nome aqui ..." required type="nome" name="nome" id="nome"/>
       <br><br>
       <input placeholder="Telefone aqui ..." required type="tel" name="telefone" id="telefone"/>
       <br><br>    
        <input placeholder="Email aqui ..." required type="email" name="email" id="email"/>
        <br><br>   
         <input placeholder=" Endereço aqui ..." required type="endereço" name="endereco" id="endereco"/>
        <br><br>   
         <input placeholder="Cpf aqui ..." required type="cpf" name="cpf" id="cpf"/>
        <br><br>
        <input type="radio" required type="M" name="sexo" id="sexo"/>Masculino
        <input type="radio"  required type="F" name="sexo" id="sexo"/>Feminino
        <br><br><!-- comment -->
         <input type="submit" value="salvar" name="salvarBD"/>
            <input type="reset" value="Limpar" name="limpar"/> 
        </form>
        <br><br>
        
        
        <?php
        $gerPF->getAll();
         $gerPF->deletarBD(1);
        ?>
       
    </body>
</html>
