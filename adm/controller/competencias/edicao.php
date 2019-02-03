<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Competências');
$smarty->assign('PAG_COMPETENCIAS', Rotas::Competencias());
$smarty->assign('ALERTA', '');

$cursos = new Cursos();
$cursos->GetCursos();
$smarty->assign('CURSOS', $cursos->Itens());

if (isset($_POST['nome']))
{
	$id 	  = $_POST['id'];
	$nome 	  = $_POST['nome'];
	$codigo   = $_POST['codigo'];
	$curso_id = $_POST['curso_id'];

	$save = new Competencias();

	$save->PreparaDados($nome, $codigo, $curso_id);

	if ($save->AtualizaDados($id))
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'atualizados');

		Rotas::Redirecionar(2, Rotas::Competencias());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$id = $_POST['id'];

$competencias = new Competencias();
$competencias->GetCompetenciaId($id);
$smarty->assign('COMPETENCIAS', $competencias->Itens());

$smarty->display('./competencias/edicao.tpl');