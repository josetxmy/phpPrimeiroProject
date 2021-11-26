<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cPessoaJ.php';
$idPessoa = 0;
if (isset($_POST['updateJ'])) {
    $idPessoa = $_POST['id'];
}
$cadPJs = new cPessoaJ();
$pessoaJ = $cadPJs->getPessoaJById($idPessoa);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Editar Pessoa Juridica</h1>
        <br><br>
        <form action="<?php $cadPJs->updateJ(); ?>" method="POST">
            <input value="<?php echo $pessoaJ[0]['idPessoa']; ?>" type="hidden" required name="idPessoa"/>
            <br><br>
            <input value="<?php echo $pessoaJ[0]['nome']; ?>" type="text" required name="nome"/>
            <br><br>
            <input value="<?php echo $pessoaJ[0]['telefone']; ?>" required type="number" name="telefone"/>
            <br><br>
            <input value="<?php echo $pessoaJ[0]['email']; ?>" required type="text" name="email"/>
            <br><br>
            <input value="<?php echo $pessoaJ[0]['nomeFantasia']; ?>" required type="text" name="nomeFantasia"/>
            <br><br>
            <input value="<?php echo $pessoaJ[0]['endereco']; ?>" required type="text" name="endereco"/>
            <br><br>
            <input value="<?php echo $pessoaJ[0]['cnpj']; ?>" required type="number" name="cnpj"/>
            <br><br>
            <input type="submit" value="Salvar" required name="updateP" />
            <input type="submit" value="Cancelar" required name="cancelarUJ" />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
