<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="ontact-top-text">
    <div class="container">
        <p class="gl-text">Авторизованный сервисный центр в  <span><?= Yii::$app->session['region']['id'] == 1 ? 'Москве' : 'Санкт-Петербурге'; ?></span></p>
    </div>
</div>
<?= remont_coffee\widgets\other\Subways::widget(); ?>
<div class="full-text">
    <div class="container">
        <?= $pageInfo['description']; ?>
    </div>
</div>

<div class="ontact-top-text" style="padding-top: 0px;">
    <div class="container">
        <div class="bl-contact">
            <div class="list">                
                <ul>
                    <li class="phone">
                        <div class="name"><a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'telefon-spb' : 'telefon-msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></div>
                    </li>
                    <li class="address">
                        <div class="name">г. Москва, 2-я Филёвская улица, 8к1.</div>
                    </li>
                    <li class="schedule">
                        <div class="name">Ежедневно с 9:00 до 21:00</div>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="full-text">
    <div class="container">
        <?= $pageInfo['full_description']; ?>        
    </div>
</div>
