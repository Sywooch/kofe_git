<?php
$assets = Yii::getAlias('@web');
$url = Yii::$app->request->pathInfo;
$url = explode('/', $url);
array_pop($url);
$url = implode('/', $url);
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<?= ofitsial\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="content-product">
    <div class="container">
        <div class="row">
            <div class="col-md-3 leftside_container">
                <div class="img-big">
                    <span>Стоимость: <br>от <?= round($pageInfo['price']); ?> р.</span>
                    <img src="/<?= $siteConfig['theme']; ?>/img/services/<?= $pageInfo['image']; ?>.png" alt="">
                </div>
                <p class="gl">Заказать звонок</p>
                <?= ofitsial\widgets\forms\Left::widget(); ?>
                <?= ofitsial\widgets\other\Ht::widget(['view' => 'left-adv']); ?>
            </div>
            <div class="col-md-9 rightside_container">
                <div class="contenttext">
                    <h1 class="inner_h1"><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                    <div class="commercpage_text"><?= $seoText; ?></div>
                    <div class="inner_tabs">
                        <div class="tabs-wrapper">
                            <div class="tabs">
                                <a href="#tab1" data-target="tab1" class="tab-heading active">Цены</a>
                            </div>
                            <div class="row">
                                <div class="tab active col-md-12" id="tab1">
                                    <?= ofitsial\widgets\lists\Neispravnost::widget(['type' => ($pageInfo['type'] == 1 ? 2 : 1), 'view' => 'servicesTable']); ?>
                                </div>
                                <!--end tab-->
                                        
                                <!--end tab-->
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