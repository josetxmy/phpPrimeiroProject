<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <?php
    function show($a,$l){
        ?>
    <a href="./view/<?php echo $a;?>.php"><?php echo $l ?></a>
      <?php
    }
    ?>
    <head>
        <meta charset="UTF-8">
        <title>Primeiro Projto - INF4T211</title>
        <link rel="icon" href="imagem/favicon.ico"/>
    </head>
    <body>
        <h1>Ger. de pessoas com POO</h1>
        <table>
            <tr>
                <td>
                    <?php show('gerPesFisica','Ger.  pessoa Fisica');?> |
         </td><!-- comment -->
         <td>
           <?php show('gerPessoaJuridica','Ger.Pessoa juridica');?>
               </tr>
            </td>
        </table>
        </body>
</html>
