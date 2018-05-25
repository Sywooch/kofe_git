<?php
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
$h1 = !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонтируем модели ' . \app\components\CController::$monoBrand['title'] . ':';
$text = !empty($pageInfo['description']) ? $pageInfo['description'] : '<p>Опытные мастера и большой склад запчастей позволяют ремонтировать все популярные модели кофемашин.
                Если у вас есть вопросы, то оставляйте онлайн-заявку, наши специалисты по работе с клиентами свяжутся с вами в течение 15 минут.</p>';
$breadcrumbs = [
    'Модели ' . app\components\CController::$monoBrand['title'],
];
?>
<div class="container">
    <?= satelit\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
</div>
<div class="container">  
    <h1 class="section-title"><?= $h1; ?></h1>
    <?= $text; ?>
    <?= satelit\widgets\lists\Models::widget(['limit' => 0]); ?>
</div>
<div class="container">
    <?= satelit\widgets\other\Ht::widget(); ?>
</div>