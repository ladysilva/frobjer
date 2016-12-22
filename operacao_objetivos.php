<?php 
include ("banco_dominio.php");
include ("conecta.php");

$descricao=$_POST['descricao'];
$id= $_POST['id_agregacao'];
$objetivo= $_POST['objetoP'];
$verbo= $_POST['verboP'];

if(isset($_POST['tipoGenerico']))
{
    $tipo= "generico";
}
else
{
     $tipo= "especifico";
}


   insereObjetivos($conexao,$descricao,$objetivo,$tipo,$verbo,$id);
  
   $msg = mysqli_error($conexao);

   echo $msg; 
   header("Location:cadastroobjetivos.php");


 
/*

 if($_POST['volta']== 'Voltar'){
	   header("Location:agregacaofuncional.php");
}*/

 ?>