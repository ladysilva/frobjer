<?php
include("cabecalho.php");
require_once("conecta.php");    
require_once("banco_dominio.php");
?>  


 
<div class="container">
 <div class="form-group">
  <label for="comment">Agregações Funcionais:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

 <div class="form-group">
  <label for="comment">Objetivos:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

<div class="form-group">
  <label for="comment">Cenários:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
<a class="btn btn-primary" href="detalhes-estrutura.php">Reutilizar Estrutura</a>
</div>


<?php include("rodape.php"); ?>     