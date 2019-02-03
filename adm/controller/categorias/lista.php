<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Categorias');

$categorias = new Categorias();

$categorias->GetCategorias();

$smarty->assign('CATEGORIAS', $categorias->Itens());
$smarty->assign('CAT_TOTAL', $categorias->TotalDados());
$smarty->assign('CAT_INFO', Rotas::CategoriasInfo());
$smarty->assign('CAT_CADASTRO', Rotas::CategoriasCadastrar());
$smarty->assign('CAT_EDICAO', Rotas::CategoriasEditar());
$smarty->assign('CAT_EXCLUSAO', Rotas::CategoriasExcluir());

$smarty->display('./categorias/lista.tpl');