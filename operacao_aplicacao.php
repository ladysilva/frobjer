<?php 
include ("banco_dominio.php");

$descricao=$_POST['descricao'];
$id= $_POST['id_subdominio'];


//if($_POST['salva']== 'Salvar')
   insereAplicacao($conexao,$descricao,$id);
   header("Location:cadastro_de_aplicacao.php");
   $msg = mysql_error($conexao);

 ?>