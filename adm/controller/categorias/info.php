<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Categorias');
$smarty->assign('PAG_CATEGORIAS', Rotas::Categorias());

$categorias = new Categorias();
$categorias->GetCategoriaId(Rotas::$pag[2]);
$smarty->assign('CATEGORIAS', $categorias->Itens());

$smarty->display('./categorias/detalhe.tpl');