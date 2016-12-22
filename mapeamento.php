<?php include("cabecalho.php");
require_once("conecta.php");
require_once("banco_dominio.php");
?>

<form action="operacao_dominio.php" method="POST">
<div class="container">
        <div class="panel-group col-md-10">
            <div class="panel panel-default">
                <label class="panel-heading">Domínio</label>
                <div class=" panel-body">
                <label for="descr" class="label-control">Descrição</label>
                <input type="text" class="form-control" id="descr" name="descricao" size="20" required="true">
                <label for="descr" class="label-control">Área</label>
                <input type="text" class="form-control" id="descr" name="area" required="true">
            </div>
             <input  type="submit" class="btn-primary"  name="salvar" value="Salvar"/>
             <label><a href="mostra.php">Aplicacoes</a></label>
                 </div>
                </div>
            </form>
            </div>            
</div>
</div>
</div>
<?php require_once("rodape.php");?>