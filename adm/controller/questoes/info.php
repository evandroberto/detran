<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Questões');
$smarty->assign('PAG_QUESTOES', Rotas::Questoes().'/'.Rotas::$pag[2]);
$smarty->assign('PAG_ALTERNATIVAS', Rotas::Alternativas().'/'.Rotas::$pag[2].'/'.Rotas::$pag[3]);

$questoes = new Questoes();
$questoes->GetQuestaoId(Rotas::$pag[3]);
$smarty->assign('QUESTOES', $questoes->Itens());

$alternativas = new Alternativas();
$alternativas->GetAlternativasQuestao(Rotas::$pag[3]);
$smarty->assign('ALTERNATIVAS', $alternativas->Itens());

$smarty->display('./questoes/detalhe.tpl');