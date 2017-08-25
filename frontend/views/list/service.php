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
                    <img src="<?= $assets ?>/images/promo-bg.png" alt="<?= $pageInfo['title']; ?>">
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
                <h3>Если ваша кофемашина Бренд Модель услуга закажите Бесплатную консультацию специалиста!</h3>
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