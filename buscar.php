<?php
include("cabecalho.php");
require_once("conecta.php");	
require_once("banco_dominio.php");
?>	
<div class="container" >
  <h2>Buscando informações ... </h2>
  <form role="form" action="form_altera.php" method="POST">
    <div class="form-group" >
      <label for="cod">Código:</label>
      <input type="number" class="form-control" name="id" style="width:120px">
      <input  type="submit" class="btn-primary" value="Buscar"/>
    </div>

   <?php include ("rodape.php") ?>