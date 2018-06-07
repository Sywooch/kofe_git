<?php
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    ($siteConfig['mono'] ? 'Прайс-лист' : $pageInfo['title']),
];
$this->title = $pageInfo['meta_title'];
?>
<?= ofitsial\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="content-product">
    <div class="container">
        <div class="row">
            <div class="col-md-3 leftside_container">
                <p class="gl">Заказать звонок</p>
                <?= ofitsial\widgets\forms\Left::widget(); ?>
                <?= ofitsial\widgets\other\Ht::widget(['view' => 'left-adv']); ?>
            </div>
            <div class="col-md-9 rightside_container">
                <div class="contenttext">
                    <h1 class="inner_h1"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
                    <?= $pageInfo['description'] ?>
                    <div class="inner_tabs">
                        <div class="tabs-wrapper">
                            <div class="tabs">
                                <a href="#tab1" data-target="tab1" class="tab-heading active">Услуги</a>
                                <a href="#tab3" data-target="tab3" class="tab-heading ">Неисправности</a>
                            </div>
                            <div class="row">
                                <div class="tab active col-md-12" id="tab1">
                                    <?= ofitsial\widgets\lists\Neispravnost::widget(['type' => 1, 'view' => 'servicesTable']); ?>
                                </div>
                                <div class="tab  col-md-12" id="tab3" style="display:none;">
                                    <div>
                                        <?= ofitsial\widgets\lists\Neispravnost::widget(['type' => 2, 'view' => 'servicesTable']); ?>
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