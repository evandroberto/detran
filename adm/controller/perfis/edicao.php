<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Perfis');
$smarty->assign('PAG_PERFIS', Rotas::Perfis());
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

	$save = new Perfis();

	$save->PreparaDados($nome, $codigo, $curso_id);

	if ($save->AtualizaDados($id))
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'atualizados');

		Rotas::Redirecionar(2, Rotas::Perfis());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$id = $_POST['id'];

$perfis = new Perfis();
$perfis->GetPerfilId($id);
$smarty->assign('PERFIS', $perfis->Itens());

$smarty->display('./perfis/edicao.tpl');