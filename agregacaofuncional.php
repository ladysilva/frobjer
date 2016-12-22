<?php include ("cabecalho.php"); 
include("cod.php");
$cod=cod_aplicacao($conexao);
$descricao=descricao_aplicacao($conexao,$cod);

?>

<div class="container" >
  <h2>Cadastro de Agregação Funcional</h2>
  <form role="form" action="agregacao.php" method="POST">
  <div class="form-group">
      <label for="pwd">Aplicação</label>
      <input type="text" class="form-control" readonly="readonly" value="<?=$cod?>" name="idap" placeholder="Agregação Funcional" style="width:200px">
      <input type="text" class="form-control" readonly="readonly" value="<?=$descricao?>" name="dominio" placeholder="Agregação Funcional" style="width:200px">
    </div>
    <div class="form-group">
      <label for="pwd">Agregação funcional</label>
      <input type="text" class="form-control"  name="descricao_agregacao" placeholder="Agregação Funcional" style="width:200px">
    </div>
    <div class="form-group">
   <input  type="submit" class="btn-primary" name="cadastra" value="Cadastrar"/>
   <label><a href="cadastro_de_aplicacao.php">Voltar</a></label>
   <label><a href="cadastroobjetivos.php">Cadastrar Objetivos</a></label>
    </div>
  </form>
</div>

</body>
</html>
