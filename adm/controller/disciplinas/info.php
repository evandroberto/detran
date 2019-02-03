<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Disciplinas');
$smarty->assign('PAG_DISCIPLINAS', Rotas::Disciplinas());

$disciplinas = new Disciplinas();

$disciplinas->GetDisciplinaId(Rotas::$pag[2]);

$smarty->assign('DISCIPLINAS', $disciplinas->Itens());

$smarty->display('./disciplinas/detalhe.tpl');