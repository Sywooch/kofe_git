<?php
$this->title = $pageInfo['title'] == 2 ?
        'Кофемашина ' . $pageInfo['title'] . '? Узнать стоимость ремонта кофемашины ' . $page['title'] . ' в Москве' :
        'Услуга - ' . $pageInfo['title'] . ' кофемашин ' . $page['title'] . ' в Москве и Московской области';
?>

<h1><?=
    $pageInfo['title'] == 2 ?
            'Кофемашина ' . $page['title'] . ' ' . $pageInfo['title'] . '?' :
            'Услуга - ' . $pageInfo['title'] . ' кофемашины ' . $page['title'] . ' в Москве';
    ?></h1>