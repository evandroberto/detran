<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Avaliações');
$smarty->assign('PAG_AVALIACOES', Rotas::Avaliacoes());
$smarty->assign('PAG_DISCIPLINAS', Rotas::DisciplinasIncluir().'/'.Rotas::$pag[2]);

$avaliacoes = new Avaliacoes();
$avaliacoes->GetAvaliacaoId(Rotas::$pag[2]);
$smarty->assign('AVALIACOES', $avaliacoes->Itens());

$smarty->display('./avaliacoes/detalhe.tpl');