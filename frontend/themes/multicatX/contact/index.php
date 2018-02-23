<?php 
$breadcrumbs = [    
    'Контакты',
];
$this->title = str_replace('#brand_en#', \app\components\CController::$monoBrand['title'], $pageInfo['meta_title']);
$siteConfig = app\components\CController::getSiteConfig();
$assets = '/' . Yii::getAlias('@web');
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>
    <div class="main_container grey_container">
        <div class="inner_container">
          <h1 class="contacts_h1"><?= $pageInfo['meta_h1']; ?></h1>
        </div>
        <?= $pageInfo['description']; ?>
    </div>
    <div class="main_container kakrabotaem_container colorbg">
        <div id="rumiservice13" class="inner_container" style="padding: 0px;">
            <div id="rumiservice13_header">Как мы работаем?</div>
            <div class="rumiservice13_blocks">
                <div class="rumiservice13_block rumiservice13_block1">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">1</div>
                        <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/rumiservice13_block1.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Вы оставляете заявку на ремонт через сайт или позвонив в сервисный центр.
                    </div>
                </div>
                <div class="rumiservice13_block rumiservice13_block2">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">2</div>
                        <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/rumiservice13_block2.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Мы проводим бесплатную диагностику и выявляем возникшие проблемы.
                    </div>
                </div>
                <div class="rumiservice13_block rumiservice13_block3">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">3</div>
                        <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/rumiservice13_block3.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Наш менеджер перезванивает Вам, согласовывает сроки и стоимость ремонта.
                    </div>
                </div>
                <div class="rumiservice13_block rumiservice13_block4">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">4</div>
                        <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/rumiservice13_block4.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        По окончанию ремонта, Вы забираете полностью исправную технику или мы БЕСПЛАТНО доставляем её Вам!
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>