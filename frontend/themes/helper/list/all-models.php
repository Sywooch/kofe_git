<?php
$siteConfig = app\components\CController::getSiteConfig();
$rName = '';
if (isset(Yii::$app->params['brandRussianNames'][app\components\CController::$monoBrand['title']]))
    $rName = Yii::$app->params['brandRussianNames'][app\components\CController::$monoBrand['title']];
$this->title = str_replace(['#brand_en#', '#brand_ru#'], [app\components\CController::$monoBrand['title'], $rName], $seo['meta_title']);
$h1 = !empty($seo['meta_h1']) ? $seo['meta_h1'] : 'Ремонтируем модели ' . \app\components\CController::$monoBrand['title'] . ':';
$text = !empty($seo['meta_text1']) ? $seo['meta_text1'] : '<p>Опытные мастера и большой склад запчастей позволяют ремонтировать все популярные модели кофемашин.
                Если у вас есть вопросы, то оставляйте онлайн-заявку, наши специалисты по работе с клиентами свяжутся с вами в течение 15 минут.</p>';
$breadcrumbs = [
    'Модели ' . app\components\CController::$monoBrand['title'],
];
?>
<div class="container">
    <?= helper\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
</div>
<div class="container">  
    <h1 class="section-title"><?= $h1; ?></h1>
    <?= $text; ?>
    <?= helper\widgets\lists\Models::widget(['limit' => 0]); ?>
</div>
<div class="container">
    <?= helper\widgets\other\Ht::widget(); ?>
</div>