<?php
$assets = Yii::getAlias('@web');
$url = Yii::$app->request->pathInfo;
$url = explode('/', $url);
array_pop($url);
$url = implode('/', $url);
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="container">
    <?= helper\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    <?php //print_r($page);exit; ?>
    <section class="product">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product-images">
                    <div class="product-images--large">
                        <img src="<?= $siteConfig['theme']; ?>/images/services/<?= empty($pageInfo['image']) ? '95' : $pageInfo['image']; ?>.png" alt="<?= $pageInfo['title']; ?>" class="img-responsive js-product-image">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <h1 class="section-title"><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="product-properties">
                            <li>Производитель: <span><?= \app\components\CController::$monoBrand['title']; ?></span></li>
                            <?php if (!empty($page['title'])): ?>
                                <li>Модель устройства: <span><?= $page['title']; ?></span></li>     
                            <?php endif; ?>
                            <li>Гарантия на ремонт: <span>от 6 месяцев</span></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="product-bundle">
                            <p>В стоимость входит:</p>
                            <ul class="product-bundle-item">
                                <li>Доставка: <span>0&nbsp;руб</span></li>
                                <li>Диагностика: <span>0 руб</span></li>
                            </ul>                            
                        </div>
                    </div>
                </div>
                <p class="product-price">Стоимость: <span class="product-price--sale js-product-price--sale">от <?= round($pageInfo['price']); ?>&nbsp;руб</span></p>
                <ul class="product-properties" style="margin: 15px 0px 0px;">
                    <li style="margin: 0px;">При заказе данной услуги до 
                    <?= date('d.m.Y', strtotime('+1 day')); ?>
                    Вы получите скидку 15%</li>
                </ul>
                <span class="button button--red button--large popup">
                    Получить скидку на ремонт
                </span>
            </div>
        </div>
    </section>
</div>
<div class="background--grey margin--bottom60">
    <div class="container">
        <section class="product-description">
            <div class="content">
                <?= $seoText; ?>
            </div>
        </section>
        <div class="row">
            <?= helper\widgets\lists\PopularServices::widget(['view' => 'popularServicesTable', 'type' => 1, 't1' => 'Стоимость услуг', 't2' => 'Посмотреть все|Скрыть', 't3' => 'Посмотреть все']); ?>
            <?= helper\widgets\lists\PopularServices::widget(['view' => 'popularServicesTable', 'type' => 2, 't1' => 'Неисправности', 't2' => 'Посмотреть все|Скрыть', 't3' => 'Посмотреть все']); ?>
        </div>
    </div>
    <i class="background-pattern background-pattern--left js-background-pattern"></i>
    <i class="background-pattern background-pattern--right js-background-pattern"></i>
</div>
<div class="container">
    <?= helper\widgets\other\Ht::widget(); ?>
    <?= helper\widgets\lists\Models::widget(['limit' => 12]); ?>
</div>
<?= helper\widgets\other\Ht::widget(['view' => 'callBack']); ?>