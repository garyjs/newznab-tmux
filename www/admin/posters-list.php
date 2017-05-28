<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'smarty.php';

use app\models\MultigroupPosters;
use nntmux\db\DB;

$page   = new AdminPage();
$pdo = new DB();
$posters = MultigroupPosters::find('all', ['order' => ['poster' => 'ASC']]);

$poster = (isset($_REQUEST['poster']) && !empty($_REQUEST['poster']) ? $_REQUEST['poster'] : '');

$page->smarty->assign(
	[
		'poster' => $poster,
		'posters' => $posters
	]
);

$page->title = 'MultiGroup Posters List';
$page->content = $page->smarty->fetch('posters-list.tpl');
$page->render();
