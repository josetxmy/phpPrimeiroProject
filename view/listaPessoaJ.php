<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$pfs = $_REQUEST['listaPessoaJ'];
$pfsJd = $_REQUEST['pessoasPJBD'];
$pfsJ = new cPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>NomeFantasia</th><th>E-mail</th><th>CNPJ</th><th>funçoes</th>
            </tr><!-- 
            
            <?php foreach ($pfs as $pj): ?>
                            <tr>
                                <td><?php //echo $pf->getNome();     ?> </td>
                                <td><?php //echo $pf->getEmail();     ?> </td>
                                <td><?php //echo $pf->getCpf();     ?> </td>
                            </tr>
            <?php endforeach; ?>-->
            <!-- Nova tabela a partir do BD -->
            <?php
            if ($pfsJd == null) {
                echo "Tabela vazia!";
            } else {
                foreach ($pfsJd as $pj):
                    ?>
                    <tr>
                        <td><?php echo $pj["nomeFantasia"]; ?> </td>
                        <td><?php echo $pj["email"]; ?> </td>
                        <td><?php echo $pj["cnpj"]; ?> </td>
                        <td>
                            <form action="editarPessoaJ.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $pj["idPessoa"]; ?>"/>
                                <input type="submit" name="updateJ" value="Editar"/>
                            </form>
                            <form action="<?php $pfsJ->deletarJD(); ?>" method="POST">
                                <input type="hidden" name="id" value="<?php echo $pj["idPessoa"]; ?>"/>
                                <input type="submit" name="DeletarJ" value="Deletar"/>

                            </form>
                        </td>
                    </tr>
                    <?php
                endforeach;
            }
            ?>

        </table>
    </body>
</html>