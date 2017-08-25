<?php
$assets = Yii::getAlias('@web');
$url = Yii::$app->request->pathInfo;
$url = explode('/', $url);
array_pop($url);
$url = implode('/', $url);
$this->title = $title;
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
                            <img src="<?= $assets ?>/uploads/images/<?= $brandImage; ?>" alt="<?= $pageInfo['title']; ?>">
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
                    <h3>Если ваша кофемашина <?= $page['title']; ?> <?= mb_strtolower($pageInfo['title'], 'utf8'); ?> - закажите Бесплатную консультацию специалиста!</h3>
                <?php else: ?>
                    <h3>Закажите Бесплатную консультацию специалиста!</h3>
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
                <div class="container">
                    <?= $seoText2; ?>
                </div>
            <?php endif; ?>
        </div>			
    </div>
    <div class="clear"></div>
</section>
<?= \app\widgets\lists\PopularBrands::widget(); ?>