<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Notícias');
$smarty->assign('PAG_NOTICIAS', Rotas::Noticias());

$categorias = new Categorias();
$categorias->GetCategorias();
$smarty->assign('CATEGORIAS', $categorias->Itens());

$noticias = new Noticias();
$noticias->GetNoticiaId(Rotas::$pag[2]);
$smarty->assign('NOTICIAS', $noticias->Itens());

$smarty->display('./noticias/detalhe.tpl');