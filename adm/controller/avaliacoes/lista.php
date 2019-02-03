<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Avaliações');

$avaliacoes = new Avaliacoes();

if (isset(Rotas::$pag[2]))
{
	$avaliacoes->GetAvaliacoesCurso(Rotas::$pag[2]);
}
else 
{
	$avaliacoes->GetAvaliacoes();
}

$smarty->assign('AVALIACOES', $avaliacoes->Itens());
$smarty->assign('AVAL_TOTAL', $avaliacoes->TotalDados());
$smarty->assign('AVAL_INFO', Rotas::AvaliacoesInfo());
$smarty->assign('AVAL_CADASTRO', Rotas::AvaliacoesCadastrar());
$smarty->assign('AVAL_EDICAO', Rotas::AvaliacoesEditar());
$smarty->assign('AVAL_EXCLUSAO', Rotas::AvaliacoesExcluir());

$smarty->assign('PAGINACAO', $avaliacoes->MostraPaginacao());

$smarty->display('./avaliacoes/lista.tpl');