<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cPessoaF.php';
$idPessoa = 0;
if (isset($_POST['updatePF'])) {
    $idPessoa = $_POST['id'];
}
$cadPfs = new cPessoaF();
$pessoaF = $cadPfs->getPessoaFById($idPessoa);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Editar Pessoa Fisíca</h1>
        <br><br>
        <form action="<?php $cadPfs->updateF ?>" method="POST">
            <input value="<?php echo $pessoaF[0]['idPessoa']; ?>" type="text" required name="idPesoa"/>
            <br><br>
            <input value="<?php echo $pessoaF[0]['nome']; ?>" type="text" required name="nome"/>
            <br><br>
            <input value="<?php echo $pessoaF[0]['telefone']; ?>" required type="number" name="telelfone"/>
            <br><br>
            <input value="<?php echo $pessoaF[0]['email']; ?>" required type="text" name="email"/>
            <br><br>
            <input value="<?php echo $pessoaF[0]['endereco']; ?>" required type="text" name="endereco"/>
            <br><br>
            <input value="<?php echo $pessoaF[0]['cpf']; ?>" required type="number" name="cpf"/>
            <br><br>
            <input type="radio"<?php if($pessoaF[0]['sexo']=="M"){echo "checked";} ?> value="M" name="sexo"/>Feminino
            <input type="radio" <?php if($pessoaF[0]['sexo']=="F"){echo "checked";} ?> value="F" name="sexo"/>Masculino
            <br><br>
            <input type="submit" value="Salvar" required name="updatePF" />
            <input type="submit" value="Cancelar" required name="cancelarUP" />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
