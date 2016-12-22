<?php
require_once("conecta.php");	


function listaDominio($conexao) {
	$mapeados = array();
	$query = "select * from dominio";
	$result= pg_query($conexao, $query);
	while($lista = pg_fetch_assoc($result)) {
		array_push($mapeados, $lista);
	}
	return $mapeados;
}	

function mostradetalhes($conexao, $id){
	$aplicacao=array();
  $query  ="select * from aplicacao WHERE id_subdominio=$id";
    $result= pg_query($conexao, $query);
       while($lista=pg_fetch_assoc($result)){
       	array_push($aplicacao, $lista);
       }

       return $aplicacao;

  }


function mostraobjetivo($conexao, $id){
  $query  ="select agregacao.*, objetivo.* FROM agregacao INNER JOIN objetivo ON agregacao.id_agregacao = objetivo.id_agregacao
   where id_objetivo=$id";
  $result= pg_query($conexao, $query);
      return pg_fetch_assoc($result);
  }

function lista_Aplicacao($conexao){
	$subdominios = array();
	$query ="select dominio.area, subdominio.descricao, subdominio.id_subdominio FROM dominio INNER JOIN subdominio ON dominio.id_dominio = subdominio.id_dominio";
	$result= pg_query($conexao, $query);
	while($lista = pg_fetch_assoc($result)) {
		array_push($subdominios, $lista);
	}
	return $subdominios;
}


function insereDominio($conexao, $descricao, $area) {
	$query = "insert into dominio(descricao, area) values ('{$descricao}','{$area}')";
	return pg_query($conexao, $query);
}

function removeDominio($conexao, $id) {
	$query = "delete from dominio where id_dominio = {$id}";
	return pg_query($conexao, $query);
}


function alteraDominio($conexao, $id_dominio, $descricao, $area) {
	$query = "update dominio set descricao = '{$descricao}', area ='{$area}' where id_dominio = {$id_dominio}";
	return pg_query($conexao, $query);
}

function buscaDominio($conexao, $id) {
	$query = "select * from dominio where id_dominio = {$id}";
	$resultado = pg_query($conexao, $query);
	return pg_fetch_assoc($resultado);
}

function insereSubDominio($conexao, $descricao, $nivel, $id_dominio) {
	$query = "insert into subdominio(descricao, nivel, id_dominio) values ('{$descricao}',{$nivel}, {$id_dominio})";
	return pg_query($conexao, $query);
}

function insereAplicacao($conexao, $descricao,  $id_subdominio) {
	$query = "insert into aplicacao(descricao_aplicacao, id_subdominio) values ('{$descricao_aplicacao}',{$id_subdominio})";
	return pg_query($conexao, $query);
}

function selecionaAplicacao($conexao, $id){
	$query = "select descricao_aplicacao from aplicacao where id_aplicacao = {$id}";
	$resultado = pg_query($conexao, $query);
	return pg_fetch_assoc($resultado);
}

function insereAgregacao($conexao, $descricao) {
	$query = "insert into agregacao (descricao) values ('{$descricao}')";
	return pg_query($conexao, $query);
}

function listaAgregacoes($conexao){
	$agregacoes = array();
	$query ="select  dominio.*, agregacao.* from dominio
    LEFT JOIN agregacao ON (dominio.id_dominio = agregacao.id_dominio)";
	$result= pg_query($conexao, $query);
	while($lista =  pg_fetch_assoc($result)) {
		array_push($agregacoes, $lista);
	}
	return $agregacoes;
}

function insereObjetivos($conexao, $descricao, $ObjetivoP, $tipo, $verboP,$id_agregacao ) {
	$query = "insert into objetivo(descricao, ObjetoP, tipo,verboP, id_agregacao) values ('{$descricao}','{$ObjetivoP}','{$tipo}','{$verboP}',{$id_agregacao} )";
	return pg_query($conexao, $query);
}

function insereAgregacao_aplicacao($conexao, $id_agregacao, $id_aplicacao) {
	$query = "insert into agregacao_aplicacao(id_agregacao, id_aplicacao) values ({$id_agregacao},{$id_aplicacao})";
	return pg_query($conexao, $query);
}

function insereCenario($conexao, $descricao, $ObjetivoP, $verboP,$id_objetivo) {
	$query = "insert into cenario(descricao, ObjetoP,verboP, id_objetivo) values ('{$descricao}','{$ObjetivoP}','{$verboP}',{$id_objetivo} )";
	return pg_query($conexao, $query);
}




function inserePrimitivo($conexao, $descricao, $ObjetivoP, $verboP,$id_cenario) {
	$query = "insert into primitivo (descricao, ObjetoP,verboP, id_cenario) values ('{$descricao}','{$ObjetivoP}','{$verboP}',{$id_cenario})";
	return pg_query($conexao, $query);
}