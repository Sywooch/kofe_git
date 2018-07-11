<?php
$this->title = $pageInfo['title'] == 2 ?
        'Кофемашина ' . $pageInfo['title'] . '? Узнать стоимость ремонта кофемашины ' . $page['title'] . ' в Москве' :
        app\components\CController::mbUcfirst($pageInfo['title'], 'utf8') . ' кофемашин ' . $page['title'] . ' в Москве и Московской области';
?>

<h1><?=
    $pageInfo['type'] == 2 ?
            'Кофемашина ' . $page['title'] . ' ' . $pageInfo['title'] . '? Ремонт кофемашин в Москве за 1 день.' :
            app\components\CController::mbUcfirst($pageInfo['title'], 'utf8') . ' кофемашины ' . $page['title'] . ' в Москве за 1 день';
    ?></h1>