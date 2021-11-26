<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// put your code here
require_once '../controller/cPessoaJ.php';
$gerPJ = new cPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ger. Pessoa Juridica</title>
    </head>
    <body>
        <h1>Ger. Pessoa Juridica</h1>
        <a href="../indexx.php">voltar</a>
        <br><br>
        <form action="<?php $gerPJ->salvarJD(); ?>" method="POST">
            <input placeholder="Nome aqui ..." required type="text" name="nome" id="nome"/>
            <br><br>
            <input placeholder="Telefone aqui ..."  required type="number" name="telefone" id="telefone"/>
            <br><br>    
            <input placeholder="Email aqui ..." required type="text" name="email" id="email"/>
            <br><br>   
            <input placeholder=" Endereço aqui ..." required type="text" name="endereco" id="endereco"/>
            <br><br>   
            <input placeholder="NomeFantasia aqui ..." required type="text" name="nomeFantasia" id="nomeFantasia"/>
            <br><br>
            <input placeholder="Cnpj aqui ..." type="text" required name="cnpj" id="cnpj"/>
             <br><br><!-- comment -->
            <input type="submit" value="salvar" name="salvar"/>
            <input type="reset" value="Limpar" name="limpar"/> 
        </form>
        <br><br> 

        <?php
        $gerPJ->getAll();
        $gerPJ->deletarJD(1);
        ?>
    </body>
</html>
