<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Cursos');
$smarty->assign('PAG_CURSOS', Rotas::Cursos());
$smarty->assign('ALERTA', '');

if (isset($_POST['nome']))
{
	$id 		   = $_POST['id'];
	$nome 		   = $_POST['nome'];
	$sigla 		   = $_POST['sigla'];
	$fundamentacao = $_POST['fundamentacao'];
	$requisito 	   = $_POST['requisito'];

	$save = new Cursos();

	$save->PreparaDados($nome, $sigla, $fundamentacao, $requisito);

	if ($save->AtualizaDados($id))
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'atualizados');

		Rotas::Redirecionar(2, Rotas::Cursos());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$id = $_POST['id'];

$cursos = new Cursos();
$cursos->GetCursoId($id);
$smarty->assign('CURSOS', $cursos->Itens());

$smarty->display('./cursos/edicao.tpl');