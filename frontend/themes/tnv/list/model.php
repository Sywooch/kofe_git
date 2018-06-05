<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
$breadcrumbs = [
    '/' . $brand['url'] => ' ' . $brand['title'],
    ' ' . $brand['title'] . ' ' . $pageInfo['title'],
];
?>
<?= tnv\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="aside-layout container mb166">
    <div class="row sticky-parent">
        <aside class="aside float--left col-xs-12 col-md-4" >
            <div class="aside--inner  lg-pr">
                <?php if (Yii::$app->params['devicedetect']['isMobile']): ?>
                    <div class="visible-xs visible-sm">
                        <h1 class="program--title"><?php echo (!empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']); ?></h1>
                    </div>
                <?php endif; ?>                
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="img-model">
                            <?php if (!empty($pageInfo['image'])): ?>
                                <img src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-12" data-stick="true">
                        <h2 class="wide-slider--title"><span class="">Заказать звонок</span></h2>
                        <div class="main-calc--text"><span class="">Если Вам необходим ремонт кофемашины, заполните поле ниже и мы Вам перезвоним в течении 5 минут для согласования всех предоставляемых услуг.</span></div>
                        <?= tnv\widgets\forms\InnerForm::widget(); ?>
                    </div>
                </div>
            </div>
        </aside>
        <div class="page float--right col-xs-12 col-md-8">
            <?php if (!Yii::$app->params['devicedetect']['isMobile']): ?>
                <div class="hidden-xs hidden-sm mb">
                    <h1 class="program--title"><?php echo (!empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title']); ?></h1>
                </div>
            <?php endif; ?>
            <?php if (!empty($pageInfo['description'])): ?>
                <?= str_replace(['#brand_en#', '#model_en#'], $brand['title'] . ' ' . $pageInfo['title'], $pageInfo['description']); ?>
            <?php endif; ?>
            <?= tnv\widgets\lists\Neispravnost::widget(['type' => 2, 'url' => false, 'title' => 'Цены по неисправностям', 'is_popular' => true]); ?>
            <?= tnv\widgets\lists\Neispravnost::widget(['type' => 1, 'url' => false, 'title' => 'Цены по услугам', 'is_popular' => true]); ?>
            <?= tnv\widgets\lists\Neispravnost::widget(['type' => 1, 'title' => 'Цены по прочим услугам', 'is_popular' => false]); ?>

            
        </div>
    </div>
</div>
<?= tnv\widgets\lists\PopularModels::widget(); ?>