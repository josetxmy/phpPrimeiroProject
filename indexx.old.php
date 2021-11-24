<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    function show($a){
        ?>
    <a href="https://www.<?php echo $a?>.com.br" target="blank"><?php echo $a?></a>
    <?php
    }
    ?>
    <head>
        <meta charset="UTF-8">
        <title>Primeiro Projto - INF4T211</title>
        <link rel="icon" href="imagens/favicon.jpg"/>
    </head>
    <body>
        <table>
            <tr>
                <td>
        <h1>jose vitor</h1>
        <?php
        // put your code here
        echo '<h2>Hello World</h2>';
        echo '<p>Hello world</p>';
        $valor1 = 4;
        $valor2 = 2;
        $resultado = $valor1 % $valor2;
        echo $resultado;
        echo '<br>';
        if($resultado == 0){
            echo 'Num. Par!';
        }else{
          echo 'Num. impar!';
        }
        echo'<br>';
        show('terra');
        echo ' | ';
        show('google');
        echo ' | ';
        show ('Youtube');
        ?>
       </td>
       <td>
            <P>Form Get</P>
            <form name="Pessoa" method="Get">
            <label>Nome:</label>
            <input type="text" name="nome"id='nome'/>
            <br> 
            <label>idade:</label> 
            <input type="number" name="idade" id="idade"/> 
            <br> 
            <input type="submit" value="salvar" name="salvar"/>
            <input type="reset" value="Limpar" name="limpar"/>
       </form>
          </td>
          <td>
        <P>Form Post</P>
        <form name="Pessoa2" method="Post">
            <input placeholder="nome aqui..." type="text" name="nome"id='nome'/>
            <br> 
            <input placeholder="Idade aqui..." type="number" name="idade" id="idade"/> 
            <br> 
            <input type="submit" value="salvar" name="salvarPost"/>
           <input type="reset" value="Limpar" name="limpar"/>
        </form>
        </td>
        <td>
            <P>Form F</P>
            <form name="Pessoa" method="Get">
            <label>Nome:</label>
            <input type="text" name="nome"id='nome'/>
            <br> 
            <label>Telefone:</label> 
            <input type="number" name="Telefone" id="telefone"/> 
            <br> 
            <label>Email:</label> 
            <input type="text" name="Email" id="email"/> 
            <br> 
            <label>Endereço:</label> 
            <input type="text" name="Endereço" id="endereço"/> 
            <br>
            <label>Cpf:</label> 
            <input type="number" name="Cpf" id="Cpf"/> 
            <br>
            <label>Sexo:</label> 
            <input type="text" name="Sexo" id="sexo"/> 
            <br>
            <input type="submit" value="salvar" name="salvar"/>
            <input type="reset" value="Limpar" name="limpar"/>
       </form>
        </td>
        <td>
             <P>Form J</P>
            <form name="Pessoa" method="Get">
             <label>Nome:</label>
             <input type="text" name="nome"id='nome'/>
             <br>
             <label>Telefone:</label> 
            <input type="number" name="Telefone" id="telefone"/> 
            <br> 
            <label>Email:</label> 
            <input type="text" name="Email" id="email"/> 
            <br> 
            <label>Endereço:</label> 
            <input type="text" name="Endereço" id="endereço"/> 
            <br>
            <label>NomeFantasia:</label>
            <input type="text" name="nomeFantasia"id='nomeFantasia'/>
            <br> 
            <label>Cnpj:</label> 
            <input type="number" name="Cnpj" id="cnpj"/> 
            <br>
            <label>Sexo:</label> 
            <input type="text" name="Sexo" id="sexo"/> 
            <br>
            <input type="submit" value="salvar" name="salvar"/>
            <input type="reset" value="Limpar" name="limpar"/>
      </form>
      </td>
     </tr> 
  </table>
         <?php
           if(isset($_GET['salvarGet'])){
               $msg = $_GET['nome'] . ' tem ' . $_GET['idade'] . 'anos de vida.'
               . ' E ja viveu ' .  $_GET['idade'] * 365 . 'dias aproximadamente. ';
             //var_dump($msg;
             //echo '<br>';
             //print_r($msg);  
               echo "<script type=' text/javascript'>alert('$msg');</script>"; 
           }
            if(isset($_POST['salvarPost'])){
               $msg = $_POST['nome'] . ' tem ' . $_POST['idade'] . 'anos de vida.'
               . ' E ja viveu ' .  $_POST['idade'] * 365 . 'dias aproximadamente. ';
             echo "<script type=' text/javascript'>alert('$msg');</script>"; 
            }
            if(isset($_GET['limpar'])){
                echo "<script type=' text/javascript'>alert('Form. get limpo!');</script>"; 
            }
            if(isset($_POST['limpar'])){
                echo "<script type=' text/javascript'>alert('Form. Post limpo!');</script>"; 
            }
            if(isset($_F['salvarF'])){
               $msg = $_F['nome'] . ' endereço eletronico ' . $_F['email'] . 'para contatos.'
               . ' e o seu Numero de telefone e ' .  $_F['telefone'] . 'seu endereço e  ' . $_F['endereço'] 
               . 'o seu cpf e ' . $_F['cpf'] . 'Seu genero e ' . $_F['sexo'] ;
             echo "<script type=' text/javascript'>alert('$msg');</script>"; 
            }
            if(isset($_F['limpar'])){
                echo "<script type=' text/javascript'>alert('Form. get limpo!');</script>"; 
            }
             if(isset($_J['salvarJ'])){
               $msg = $_J['nome'] . ' seu nome fantasia e ' .['nomeFantasia'] . ' seu cnpj e ' 
                 . $_J['cnpj'] . $_F['email'] . 'para contatos.' . ' e o seu Numero de telefone e ' 
                  .  $_F['telefone'] . 'seu endereço e  ' . $_F['endereço'] . 'Seu genero e ' . $_F['sexo'] ;
             echo "<script type=' text/javascript'>alert('$msg');</script>"; 
            }
            if(isset($_J['limpar'])){
                echo "<script type=' text/javascript'>alert('Form. get limpo!');</script>"; 
            }
        ?>
        <?php
        require_once './controller/cPessoaF.php';
        $cadPfs = new cPessoaF();
        echo '<br>';
        $cadPfs->imprimePF();
        ?>
        
        <?php
        require_once './controller/cPessoaJ.php';
        $cadPfs = new cPessoaJ();
        echo '<br>';
        $cadPfs->imprimePJ();
        ?>
        </body>
</html>
