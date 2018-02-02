<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="our-masters">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 class="title title__2">Наши мастера</h2>
            </div>
        </div>
        <div class="master-list">
            <div class="row">
                <div class="col-sm-8 text-left hidden-xs">
                    <div class="master-card">
                        <div class="master-card_avatar">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/master-1.jpg" alt="">
                        </div>
                        <div class="master-card_name">
                            Сергей Игнатьев
                        </div>
                        <ul class="master-card_rate">
                            <li>
                                <i>
                                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/star-empty.png" alt="">
                                </i>
                                4,5
                            </li>
                            <li>
                                <span>40</span> оценок
                            </li>
                        </ul>
                        <ul class="master-card_achivment">
                            <li>47 устраненных поломок</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 text-center">
                    <div class="master-card-describe">
                        <span>Лучший работник 2017</span>
                        <p>Каждый случай уникален, и если вы не нашли свою поломку, получите бесплатную консультацию</p>
                    </div>
                    <div class="master-card master-card__best">
                        <div class="master-card_avatar">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/master-2.jpg" alt="">
                        </div>
                        <div class="master-card_name">
                            Василий Ноброс
                        </div>
                        <ul class="master-card_rate">
                            <li>
                                <i>
                                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/star-full.png" alt="">
                                </i>
                                5
                            </li>
                            <li>
                                <span>95</span> оценок
                            </li>
                        </ul>
                        <ul class="master-card_achivment">
                            <li>120 устраненных поломок</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 text-right hidden-xs">
                    <div class="master-card">
                        <div class="master-card_avatar">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/master-3.jpg" alt="">
                        </div>
                        <div class="master-card_name">
                            Анатолий Свянин
                        </div>
                        <ul class="master-card_rate">
                            <li>
                                <i>
                                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/star-empty.png" alt="">
                                </i>
                                4,5
                            </li>
                            <li>
                                <span>175</span> оценок
                            </li>
                        </ul>
                        <ul class="master-card_achivment">
                            <li>206 устраненных поломок</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>