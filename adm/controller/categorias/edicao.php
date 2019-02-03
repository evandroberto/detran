<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Categorias');
$smarty->assign('PAG_CATEGORIAS', Rotas::Categorias());
$smarty->assign('ALERTA', '');

if (isset($_POST['nome']))
{
	$id 		   = $_POST['id'];
	$nome 		   = $_POST['nome'];

	$save = new Categorias();

	$save->PreparaDados($nome);

	if ($save->AtualizaDados($id))
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'atualizados');

		Rotas::Redirecionar(2, Rotas::Categorias());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$id = $_POST['id'];

$categorias = new Categorias();
$categorias->GetCategoriaId($id);
$smarty->assign('CATEGORIAS', $categorias->Itens());

$smarty->display('./categorias/edicao.tpl');