<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
$breadcrumbs = [
    'Бренды',
];
?>
<header class="header header__brand">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <?= professionals\widgets\forms\MainPageForm::widget(['pageInfo' => $pageInfo['meta_h1'], 'page' => $pageInfo]); ?>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-16 col-md-12 col-sm-24">
                <?= professionals\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>                
            </div>
            <div class="col-lg-8 col-md-12 col-sm-24 form dark poisk-brend">

                <form id="review-form" action="/contacts" method="post"> 
                    <div class="row">
                        <div class="form-group field-reviews-username required has-error">
                            <?=
                            yii\jui\AutoComplete::widget([
                                'name' => 'models',
                                'clientOptions' => [
                                    'source' => $searches,
                                    'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                                ],
                                'options' => ['placeholder' => 'Поиск брендов..', 'class' => 'form-control'],
                                    ]
                            );
                            ?>
                        </div> 
                    </div> 
                </form> 
            </div>
        </div>
</section>
<?= professionals\widgets\lists\AllBrands::widget(); ?>
<?= professionals\widgets\forms\Today::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 6, 'title' => 'Частые неисправности', 'is_popular' => true, 'type' => 2]); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>