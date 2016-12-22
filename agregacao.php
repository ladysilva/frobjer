<?php 
include ("conecta.php");
include ("cod.php");
include ("banco_dominio.php");



$descricao_agregacao=$_POST['descricao_agregacao'];
$id_aplicacao = $_POST['idap'];
$id_agregacao = cod_agregacao($conexao);

if($_POST['cadastra']== 'Cadastrar'){
   insereAgregacao($conexao, $descricao_agregacao);
   insereAgregacao_aplicacao($conexao, $id_agregacao, $id_aplicacao);  
   header("Location:agregacaofuncional.php");
}


 ?>