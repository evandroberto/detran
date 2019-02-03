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
	$nome 	  = $_POST['nome'];
	$codigo   = $_POST['codigo'];
	$curso_id = $_POST['curso_id'];

	$save = new Perfis();

	$save->PreparaDados($nome, $codigo, $curso_id);

	if ($save->InsereDados())
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'cadastrados');

		Rotas::Redirecionar(2, Rotas::Perfis());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$smarty->display('./perfis/cadastro.tpl');