<?php
include("cabecalho.php");
require_once("conecta.php");    
require_once("banco_dominio.php");
?>  


 
<div class="container">
 <table  class=" table table-responsive" >
<thead>
      <tr>
        <th>Domínio</th>
        <th>Subdomínio</th>
        
      </tr>
    </thead>
      <?php

     
    $dominio = lista_Aplicacao($conexao);
    foreach($dominio as $lista) :
  ?>

      <tr>
       
         <td><a href=><?= $lista['area'] ?></td>
         <td><a href=><?= $lista['descricao'] ?></td>
          <td><a href=><?= $lista['id_subdominio'] ?></td>

         </td><td><a class="btn btn-primary" href="mostra_aplicacao.php?id=<?=$lista['id_subdominio']?>">Visualizar Aplicações</a></td>
 
</div>

<?php  
endforeach
?>
  </table>
  <a href="lista_dominio.php">Voltar</a>
<?php include("rodape.php"); ?>     