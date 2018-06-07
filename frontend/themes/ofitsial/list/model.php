<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();

use app\components\CController;

if (!empty($pageInfo['image'])) {
    $img = $pageInfo['image'];
} else {
    $img = 'coffee_machine.png';
}
$breadcrumbs = [
    '/' . CController::$monoBrand['url'] => CController::$monoBrand['title'],
    CController::$monoBrand['title'] . ' ' . $pageInfo['title'],
];
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<?= ofitsial\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="content-product">
    <div class="container">
        <div class="row">
            <div class="col-md-3 leftside_container">
                <div class="img-big">                    
                    <img alt="Ремонт <?= $brand['title'] . ' ' . $pageInfo['title']; ?>" src="<?= $assets ?>/uploads/images/<?= $img; ?>"> 
                </div>
                <p class="gl">Заказать звонок</p>
                <?= ofitsial\widgets\forms\Left::widget(); ?>
                <?= ofitsial\widgets\other\Ht::widget(['view' => 'left-adv']); ?>
            </div>
            <div class="col-md-9 rightside_container">
                <div class="contenttext">
                    <h1 class="inner_h1">
                        <?php if (!empty($pageInfo['meta_h1'])): ?>
                            <?= $pageInfo['meta_h1']; ?>
                        <?php else: ?>
                            <?= app\components\CController::$category['rod_title']; ?>  <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в <?= Yii::$app->session['region']['titleRod']; ?>
                        <?php endif; ?>
                    </h1>
                    <div class="inner_tabs">
                        <div class="tabs-wrapper">
                            <div class="tabs t-33">
                                <a href="#tab1" data-target="tab1" class="tab-heading active">Услуги</a>
                                <a href="#tab1" data-target="tab2" class="tab-heading">Неисправности</a>
                                <a href="#tab3" data-target="tab3" class="tab-heading ">Описание</a>
                            </div>
                            <div class="row">
                                <div class="tab active col-md-12" id="tab1">
                                    <?= ofitsial\widgets\lists\Neispravnost::widget(['type' => 1, 'view' => 'servicesTable']); ?>
                                </div>
                                <!--end tab-->
                                <div class="tab col-md-12" id="tab2">
                                    <?= ofitsial\widgets\lists\Neispravnost::widget(['type' => 2, 'view' => 'servicesTable']); ?>
                                </div>

                                <div class="tab  col-md-12" id="tab3" style="display:none;">
                                    <div class="tabcontent">
                                        <?php if (!empty($pageInfo['description'])): ?>
                                            <?= $pageInfo['description']; ?>
                                        <?php else: ?>
                                            <p>
                                                <?= app\components\CController::$category['rod_title']; ?> <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в короткие сроки. Устраняем неисправности любой сложности с гарантией качества комплектующих и выполненных работ.               
                                            </p>
                                        <?php endif; ?>    
                                    </div>
                                </div>
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