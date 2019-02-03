<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Notícias');
$smarty->assign('PAG_NOTICIAS', Rotas::Noticias());
$smarty->assign('PAG_CATEGORIAS', Rotas::Categorias());

$noticias = new Noticias();

if (isset(Rotas::$pag[2]))
{
	$noticias->GetNoticiasCategoria(Rotas::$pag[2]);
}
else 
{
	$noticias->GetNoticias();
}

$smarty->assign('NOTICIAS', $noticias->Itens());
$smarty->assign('NOT_TOTAL', $noticias->TotalDados());
$smarty->assign('NOT_INFO', Rotas::NoticiasInfo());
$smarty->assign('NOT_CADASTRO', Rotas::NoticiasCadastrar());
$smarty->assign('NOT_EDICAO', Rotas::NoticiasEditar());
$smarty->assign('NOT_EXCLUSAO', Rotas::NoticiasExcluir());

$categorias = new Categorias();
$categorias->GetCategorias();
$smarty->assign('CATEGORIAS', $categorias->Itens());

$smarty->assign('PAGINACAO', $noticias->MostraPaginacao());

$smarty->display('./noticias/lista.tpl');