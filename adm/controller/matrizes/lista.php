<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Matrizes');

$cursos = new Cursos();
$cursos->GetCursos();
$smarty->assign('CURSOS', $cursos->Itens());

if (isset($_POST['curso_id']) || isset(Rotas::$pag[2]))
{
	$curso_id = (isset($_POST['curso_id']) ? $_POST['curso_id'] : Rotas::$pag[2]);
	
	$perfis = new Perfis();
	$perfis->GetPerfisCurso($curso_id);
	$smarty->assign('PERFIS', $perfis->Itens());

	$competencias = new Competencias();
	$competencias->GetCompetenciasCurso($curso_id);
	$smarty->assign('COMPETENCIAS', $competencias->Itens());

	$smarty->assign('PAG_COMPETENCIAS', Rotas::Competencias().'/'.$curso_id);
	$smarty->assign('PAG_PERFIS', Rotas::Perfis().'/'.$curso_id);
	$smarty->assign('PAG_QUESTOES', Rotas::Questoes().'/'.$curso_id);

	$smarty->display('./matrizes/lista.tpl');
}
else 
{
	$smarty->display('./matrizes/select.tpl');
}
