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
                        <?php 
                            $src = $assets . '/images/promo-bg.png';
                            if(is_file(Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'images/' . $siteConfig['sitePrefix'] . 'promo-bg.png')) {
                                $src = $assets . '/' . $siteConfig['sitePrefix'] . 'images/' . $siteConfig['sitePrefix'] . 'promo-bg.png';
                            }
                         ?>
                        <img src="<?= $src ?>" alt="<?= $pageInfo['title']; ?>">
                    <?php endif; ?>
                </div>
                <div class="right-text">
                    <div class="h1">
                        <h1><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                    </div>                    
                    <?= $seoText; ?>                    
                </div>
                <div class="clear"></div>
            </section>
            <section id="zakaz">
                <?php if ($pageInfo['type'] == 2 && !in_array($pageInfo['id'], [17, 18]) && !empty($page) && !empty($page['title'])): ?>
                <p class="h3">Если <?= app\components\CController::$category['2_title']; ?> <?= $page['title']; ?> <?= mb_strtolower($pageInfo['title'], 'utf8'); ?> - закажите Бесплатную консультацию специалиста!</p>
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

        </div>			
    </div>
    <div class="clear"></div>
</section>
<?= !$siteConfig['mono'] ? \app\widgets\lists\PopularBrands::widget() : ''; ?>
<?= $siteConfig['mono'] ? \app\widgets\lists\Models::widget(['mono' => true, 'parent' => $siteConfig['brand-id']]) : ''; ?>

<?php if (!empty($seoText2)): ?>
    <section id="text-block">
        <div class="container">
            <?= $seoText2; ?>
        </div>
    </section>
<?php endif; ?>
<?php if($siteConfig['id'] == 2): ?>
<noindex>
    <section class="promo-video">
        <div class="container">
            <div class="left">
                <iframe  src="https://www.youtube.com/embed/M3ebpSpcsro?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                <!--<div id="promo-video"></div>-->
            </div>
            <div class="right">
                <div class="title">Здравствуйте</div>
                <p>Сервисный центр по ремонту кофемашин Spb-Remont-Kofe реализует ремонт кофемашин с 2010 года. За это время мы скоординировали работу инженеров таким образом, что все ремонтные услуги выполняются в течении 24 часов с момента Вашего обращения. Все сотрудники предприятия имеют колосcальный опыт в ремонте кофемашин. Сервисный центр работает как с частными так и с юридическими лицами и государственными учреждениями. На все работы, как и на заменённые комплектующие Вам будет предоставлена гарантия сроком до 1 года. Выбирайте профессионалов, сделаем ремонт качественно и ответим за качество нашей работы!</p>
            </div>
        </div>
    </section>
</noindex>
<?php endif; ?>