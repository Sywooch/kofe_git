<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<?php if($b == 'Bosch'): ?>
<section class="why-we">
    <div class="row">
        <div class="col-xs-24">
            <div class="title light">Подменная кофемашина в подарок</div>
        </div>
    </div>
    <div class="advantages">
        <div class="row">
            <div class="col-sm-24">
                <div class="advantage">
                    <div class="advantage_pic">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-1.png" alt="">
                    </div>
                    <div class="advantage_txt">
                        Всего 1 день и кофемашина снова в рабочем состоянии!
                        <br/><span class="frontlight-brown">С предоставлением гарантии на 2 года.</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-24">
                <div class="advantage">
                    <div class="advantage_pic">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-2.png" alt="">
                    </div>
                    <div class="advantage_txt">
                        Скоростная доставка за установленные сроки на указанный адрес!<br/><span class="frontlight-brown">Всего за 0 рублей.</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-24">
                <div class="advantage">
                    <div class="advantage_pic">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-3.png" alt="">
                    </div>
                    <div class="advantage_txt">
                        Работаем на 5!<br/><span class="frontlight-brown">Для нас главное - качество.</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-24">
                <div class="advantage">
                    <div class="advantage_pic">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-4.png" alt="">
                    </div>
                    <div class="advantage_txt">
                        Нас рекомендуют люди, столкнувшиеся с кофе-проблемами!<br/><span class="frontlight-brown">От нас еще не уходили не довольными.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else: ?>
<section class="why-we">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <div class="title light">Почему именно мы?</div>
            </div>
        </div>
        <div class="advantages">
            <div class="row">
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-1.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Всего 1 день и кофемашина снова в рабочем состоянии!
<br/><span class="frontlight-brown">С предоставлением гарантии на 2 года.</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-2.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Скоростная доставка за установленные сроки на указанный адрес!<br/><span class="frontlight-brown">Всего за 0 рублей.</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-3.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Работаем на 5!<br/><span class="frontlight-brown">Для нас главное - качество.</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-4.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Нас рекомендуют люди, столкнувшиеся с кофе-проблемами!<br/><span class="frontlight-brown">От нас еще не уходили не довольными.</span>
                        </div>
                    </div>
                </div>
                <?= professionals\widgets\forms\AdvForm::widget(); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>