<?php 

require '../lib/autoload.php';

$smarty = new Template();

$smarty->assign('TITULO', 'Detran-DF');
$smarty->assign('GET_HOME', Rotas::GetHome());
$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());

$smarty->assign('PAG_AVALIACOES', Rotas::Avaliacoes());
$smarty->assign('PAG_COMPETENCIAS', Rotas::Competencias());
$smarty->assign('PAG_CURSOS', Rotas::Cursos());
$smarty->assign('PAG_DISCIPLINAS', Rotas::Disciplinas());
$smarty->assign('PAG_MATRIZES', Rotas::Matrizes());
$smarty->assign('PAG_NOTICIAS', Rotas::Noticias());
$smarty->assign('PAG_PERFIS', Rotas::PERFIS());

$smarty->display('index.tpl');