<?php
$assets = Yii::getAlias('@web');
$url = Yii::$app->request->pathInfo;
$url = explode('/', $url);
array_pop($url);
$url = implode('/', $url);
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="main">
    <div class="container">
        <div class="left-bar">
            <?= \app\widgets\menu\LeftMenu::widget(['id' => $pageInfo['id'], 'prefUrl' => $url]); ?>
        </div>
        <div class="right-bar">
            <section id="banner">
                <div class="left-img">
                    <?php if (!empty($modelImage)): ?>
                        <div class="brand-model-image">
                            <img src="<?= $assets ?>/uploads/images/<?= $modelImage; ?>" alt="<?= $pageInfo['title']; ?>">
                        </div>
                    <?php else: ?>
                        <img src="<?= $assets ?>/images/promo-bg.png" alt="<?= $pageInfo['title']; ?>">
                    <?php endif; ?>
                </div>
                <div class="right-text">
                    <div class="h1">
                        <h1><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                    </div>
                    <p>
                        <?= $seoText; ?>
                    </p>
                </div>
                <div class="clear"></div>
            </section>
            <section id="zakaz">
                <?php if ($pageInfo['type'] == 2 && !in_array($pageInfo['id'], [17, 18]) && !empty($page)): ?>
                    <p class="h3">Если ваша кофемашина <?= $page['title']; ?> <?= mb_strtolower($pageInfo['title'], 'utf8'); ?> - закажите Бесплатную консультацию специалиста!</p>
                <?php else: ?>
                    <p class="h3">Закажите Бесплатную консультацию специалиста!</p>
                <?php endif; ?>
                <div class="left">
                    Стоимость ремонта <span>от <?= round($pageInfo['price']); ?> р</span>
                </div>
                <div class="right">

                    <?= \app\widgets\forms\CallBack::widget(); ?>

                    <div class="clear"></div>

                    <span>Специалист перезвонит в течение 5 минут.</span>
                </div>
                <div class="clear"></div>
            </section>
            <?= \app\widgets\other\Advantage::widget(); ?>
            <?php if (!empty($seoText2)): ?>
            <section id="text-block">
                <div class="container">
                    <?= $seoText2; ?>
                </div>
                </section>
            <?php endif; ?>
        </div>			
    </div>
    <div class="clear"></div>
</section>
<?= !$siteConfig['mono'] ? \app\widgets\lists\PopularBrands::widget() : ''; ?>
<?= $siteConfig['mono'] ? \app\widgets\lists\Models::widget(['mono' => true, 'parent' => $siteConfig['brand-id']]) : ''; ?>