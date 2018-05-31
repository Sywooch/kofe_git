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
<div class="content">
    <div class="container">
        <h1><?= $h1; ?></h1>
        <?= $text; ?>
        <?= nasa\widgets\lists\Models::widget(['parent' => $siteConfig['brand-id'], 'brand' => \app\components\CController::$monoBrand['title']]); ?>        
        <div class="callback">
            <div class="align-items-center row">
                <div class="col-lg-6 col-md-8 col-xl-5 offset-lg-5 offset-md-3 offset-xl-6">
                    <div class="callback__heading h3"> Не нашли свою модель? </div>
                    <div class="callback__text"> Свяжитесь с нами по телефону <a class="text-nowrap" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a> или закажите бесплатную консультацию. </div>
                    <div class="callback__form text-center">
                        <?= nasa\widgets\forms\Main::widget(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= nasa\widgets\other\Advantage::widget(); ?>
<?= nasa\widgets\other\Advantage::widget(['view' => 'warranty']); ?>
<?= nasa\widgets\other\Advantage::widget(['view' => 'timer']); ?>