<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Cursos');
$smarty->assign('PAG_CURSOS', Rotas::Cursos());
$smarty->assign('PAG_AVALIACOES', Rotas::Avaliacoes().'/'.Rotas::$pag[2]);
$smarty->assign('PAG_MATRIZ', Rotas::Matrizes().'/'.Rotas::$pag[2]);

$cursos = new Cursos();
$cursos->GetCursoId(Rotas::$pag[2]);
$smarty->assign('CURSOS', $cursos->Itens());

$smarty->display('./cursos/detalhe.tpl');