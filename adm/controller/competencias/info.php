<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Competências');
$smarty->assign('PAG_COMPETENCIAS', Rotas::Competencias());

$competencias = new Competencias();

$competencias->GetCompetenciaId(Rotas::$pag[2]);

$smarty->assign('COMPETENCIAS', $competencias->Itens());

$smarty->display('./competencias/detalhe.tpl');