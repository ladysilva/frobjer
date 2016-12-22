<?php 
 require_once("conecta.php");
 require_once("banco_dominio.php");

$descricao = $_POST['descricao'];
$nivel=$_POST['nivel'];
$id=$_POST['dominio'];


if(insereSubDominio($conexao,$descricao,$nivel,$id)){
	header("Location:subdominio.php");
	?>
	<p class="text-success">Subdominio Inserido.</p><?php
}else{
	$msg=mysqli_error($conexao);
	echo "$msg";
}
	

?>

