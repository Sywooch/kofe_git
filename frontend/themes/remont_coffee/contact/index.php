<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="ontact-top-text">
    <div class="kantener">
        <p class="G-tekst">Авторизованный сервисный центр в  <span><?= Yii::$app->session['region']['id'] == 1 ? 'Москве' : 'Санкт-Петербурге'; ?></span></p>
    </div>
</div>
<?= remont_coffee\widgets\other\Subways::widget(); ?>
<div class="Toliq-tekst">
    <div class="kantener">
        <?= $pageInfo['description']; ?>
    </div>
</div>

<div class="ontact-top-text" style="padding-top: 0px;">
    <div class="kantener">
        <div class="bl-contact">
            <div class="spisok">                
                <ul>
                    <li class="telefon">
                        <div class="imya"><a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'telefon-spb' : 'telefon-msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></div>
                    </li>
                    <li class="address">
                        <div class="imya"><?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'г. Санкт-Петербург, Гжатская улица, 21к2' : 'г. Москва, Кастанаевская улица, 17' ?></div>
                    </li>
                    <li class="schedule">
                        <div class="imya">Ежедневно с 9:00 до 21:00</div>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="Toliq-tekst">
    <div class="kantener">
        <?= $pageInfo['full_description']; ?>        
    </div>
</div>
