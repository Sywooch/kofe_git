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
<?= ofitsial\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="content-product">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 leftside_container">
                <p class="gl">Заказать звонок</p>
                <?= ofitsial\widgets\forms\Left::widget(); ?>
                <?= ofitsial\widgets\other\Ht::widget(['view' => 'left-adv']); ?>                
            </div>
            <div class="col-md-9 rightside_container">
                <div class="contenttext">
                    <h1 class="inner_h1"><?= $h1; ?></h1>
                    <div class="inner_tabs">
                        <div class="tabs-wrapper">
                            <div class="tabs t-33">
                                <a href="remont-noutbukov-apple.html#tab1" data-target="tab1" class="tab-heading active">Все модели</a>
                                <a href="remont-noutbukov-apple.html#tab3" data-target="tab3" class="tab-heading ">Описание</a>
                            </div>
                            <div class="row">
                                <div class="tab active col-md-12" id="tab1">
                                    <div class="tabcontent flex-wrap">
                                        <?= ofitsial\widgets\lists\Models::widget(['parent' => $siteConfig['brand-id'], 'brand' => \app\components\CController::$monoBrand['title']]); ?>
                                    </div>
                                </div>
                                <div class="tab  col-md-12" id="tab3" style="display:none;">
                                    <div class="tabcontent">
                                        <?= $text; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= ofitsial\widgets\other\Ht::widget(['view' => 'form-adv']); ?>
<?= ofitsial\widgets\other\Ht::widget(['view' => 'map']); ?>
<?= ofitsial\widgets\lists\LastReviews::widget(); ?>
<i class="ancorn fa fa-angle-double-up"></i>