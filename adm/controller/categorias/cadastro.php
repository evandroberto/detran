<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Categorias');
$smarty->assign('PAG_CATEGORIAS', Rotas::Categorias());
$smarty->assign('ALERTA', '');

if (isset($_POST['nome']))
{
	$nome = $_POST['nome'];

	$save = new Categorias();

	$save->PreparaDados($nome);

	if ($save->InsereDados())
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'cadastrados');

		Rotas::Redirecionar(2, Rotas::Categorias());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$smarty->display('./categorias/cadastro.tpl');