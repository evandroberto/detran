<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Perfis');
$smarty->assign('PAG_PERFIS', Rotas::Perfis());

$perfis = new Perfis();

$perfis->GetPerfilId(Rotas::$pag[2]);

$smarty->assign('PERFIS', $perfis->Itens());

$smarty->display('./perfis/detalhe.tpl');