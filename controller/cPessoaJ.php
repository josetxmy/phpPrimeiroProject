<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cPessoaJ
 *
 * @author admin
 */
require_once '../model/pessoaJ.php';

class cPessoaJ {

    //put your code here
    public $PJ = [];

    public function __construct() {
        $this->mokPJ();
    }

    public function mokPJ() {
        $pf1 = new pessoaJ();
        $pf1->setNome('JocaEmprise');
        $pf1->setTelefone(51988998899);
        $pf1->setEmail('joca@senacrs.com.br');
        $pf1->setEndereco('Rua sem saída');
        $pf1->setNomeFantasia('Walmarkt');
        $pf1->setCnpj(1234587654);
        $this->addPessoaJ($pf1);

        $pf2 = new pessoaJ();
        $pf2->setNome('JocaEmprise');
        $pf2->setTelefone(51988998899);
        $pf2->setEmail('joca@senacrs.com.br');
        $pf2->setEndereco('Rua sem saída');
        $pf2->setNomeFantasia('PaulinhoMarinheiro98');
        $pf2->setCnpj(2345492432);
        $this->addPessoaJ($pf2);
    }

    public function getAll() {
        $_REQUEST['listaPessoaJ'] = $this->PJ;
        require_once '../view/listaPessoaJ.php';
    }

    public function addPessoaJ($p) {
        array_push($this->PJ, $p);
    }

    public function imprimePJ() {
        foreach ($this->PJ as $pes) {
            echo $pes;
        }
    }

    public function formSalvarJ() {
        if (isset($_POST['salvarPJ'])) {
            $pf1 = new pessoaJ();
            $pf1->setNome($_POST['nome']);
            $pf1->setTelefone($_POST['telefone']);
            $pf1->setEmail($_POST['email']);
            $pf1->setNomeFantasia($_POST['nomefantasia']);
            $pf1->setEndereco($_POST['endereco']);
            $pf1->setCnpj($_POST['cnpj']);
            $this->addPessoaJ($pf1);
        }
    }

    public function salvarJD() {
        if (isset($_POST['salvar'])) {
            $bdHost = 'localhost';
            $bdUser = 'root';
            $bdPass = '';
            $conexao = mysqli_connect($bdHost, $bdUser, $bdPass);

            if (!$conexao) {
                die('Sem conexão: ' . mysqli_error());
            }

           $getNome = $_POST['nome'];
            $getTelefone = $_POST['telefone'];
            $getEmail = $_POST['email'];
            $getNomeFantasia = $_POST['nomeFantasia'];
            $getEndereco = $_POST['endereco'];
            $getCnpj = $_POST['cnpj'];
            $getSexo = $_POST['sexo'];

            $sql = "insert into `pessoaj` (`nome`,`telefone`,`email`,`nomeFantasia`,`endereco`"
                    . "`cnpj`,`sexo`) values ('$getNome','$getTelefone',"
                    . "'$getEmail','$getNomeFantasia','$getEndereco'"
                    . "','$getCnpj',"
                    . "'$getSexo')";
            mysqli_select_db($conexao, 'inf4t211');
            $result = mysqli_query($conexao, $sql);
            if (!$result) {
                die('Erro ao inserir: ' . mysqli_error($conexao));
            }

            mysqli_close($conexao);
        }
    }

    public function getAllPessoaPJBD() {
        $bdHost = 'localhost';
        $bdUser = 'root';
        $bdPass = '';
        $schema = 'inf4t211';
        $conexao = mysqli_connect($bdHost, $bdUser, $bdPass, $schema);

        if (!$conexao) {
            die('Sem conexão: ' . mysqli_error());
        }

        $sql = "select * from pessoaj";
        $result = mysqli_query($conexao, $sql);
        $pfsJD = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($pfsJD, $row);
            }
            $_REQUEST['pessoasPJBD'] = $pfsJD;
        } else {
            $_REQUEST['pessoasPJBD'] = 0;
        }
        
        mysqli_close($conexao);
    }

 public function deletarJD() {
        if (isset($_POST['DeletarJ'])) {
            $bdHost = 'localhost';
            $bdUser = 'root';
            $bdPass = '';
            $schema = 'inf4t211';
            $conexao = mysqli_connect($bdHost, $bdUser, $bdPass, $schema);

            if (!$conexao) {
                die('Sem conexão: ' . mysqli_error());
            }
            $id = $_POST['id'];
            $sql = "delete from pessoaj where idPessoa = $id";
            $result = mysqli_query($conexao, $sql);

            if (!$result) {
                die('Erro ao deletar: ' . mysql_error($conexao));
            }
            echo 'Registro deletado com sucesso!';
            mysqli_close($conexao);
            header('Refresh: 1');
        }
    }

    public function getPessoaJById($id) {

        $bdHost = 'localhost';

        $bdUser = 'root';

        $bdPass = '';

        $schema = 'inf4t211';

        $conexao = mysqli_connect($bdHost, $bdUser, $bdPass, $schema);

        if (!$conexao) {

            die('Sem conexão: ' . mysqli_error());
        }

        $sql = "select * from pessoaj where idPessoa = $id";

        $result = mysqli_query($conexao, $sql);

        $pfsJD = [];

        if ($result) {

            while ($row = mysqli_fetch_assoc($result)) {

                array_push($pfsJD, $row);
            }

            return $pfsJD;
        }

        mysqli_close($conexao);
    }
   Public function updateJ(){
     if (isset($_POST['updatePJ'])) { 
      $bdHost = 'localhost';
        $bdUser = 'root';
        $bdPass = '';
        $schema = 'inf4t211';
        $conexao = mysqli_connect($bdHost, $bdUser, $bdPass, $schema);

        if (!$conexao) {
            die('Sem conexão: ' . mysqli_error());
        }
            $getNome = $_POST['nome'];
            $getTelefone = $_POST['telefone'];
            $getEmail = $_POST['email'];
            $getNomeFantasia = $_POST['nomeFantasia'];
            $getEndereco = $_POST['endereco'];
            $getCnpj= $_POST['cnpj'];
            $getSexo = $_POST['sexo'];
            
            $sql="UPDATE `pessoaj` SET `nome`='$getNome',`telefone`='$getTelefone',"
          . "`email`='$getEmail',`nomeFantasia`='$getNomeFantasia'`,`endereco`='$getEndereco',`cpf`='$getCnpj',"
          . "`sexo`='$getSexo' WHERE `idPessoa`='$getIdPessoa'";
           $result = mysqli_query($conexao,$sql);
           if(!$result){
               die("Erro ao atualizar. pessoaj " . mysqli_error($conexao));
   }
   mysqli_close($conexao);
     header('Location: gerPessoaJuridica.php');  
    }
    if(isset($_POST['cancelarUJ'])){
       header('location: gerPessoaJuridica.php');
    }
    
   }
}
?>