<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div data-slider-step="250" class="wide-slider clearfix">
    <div class="container">
        <div class="wide-slider--desc mb133">
            <div class="wide-slider--desc-content">
                <div class="lg-pr">
                    <h2 class="wide-slider--title"><span class="">Ремонтируемые бренды</span></h2>
                    <div class="richtext wide-slider--text">
                        <p>Штат инженеров компании позволяет проводить ремонт кофемашин любых брендов. Каждый мастер ежегодно проходит курсы повышения квалификации, что-бы ремонт выполнялся максимально качественно!</p>
                    </div>
                    <a href="/brands" class="btn btn-outline btn-lg">Все бренды</a>
                </div>
            </div>
        </div>
        <div class="wide-slider--content">
            <div class="wide-slider--control clearfix">
                <h3 class="wide-slider--stitle float--left">Бренды</h3>
                <div class="wide-slider--buttons float--right">
                    <a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a>
                    <a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a>
                </div>
            </div>
            <div class="wide-slider--container">
                <div class="wide-slider--scroller slick-slider">
                    <?php foreach ($rows as $key => $row): ?>
                        <?php if ($key == 0 || ($key % 2) == 0): ?><div class="channel-link--grid"><?php endif; ?>
                            <a href="/<?= $row['url']; ?>" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="/uploads/images/<?= $row['image']; ?>" data-src="/uploads/images/<?= $row['image']; ?>" class="lazyload" />
                                </span>
                            </a>
                            <?php if (($key % 2) == 1): ?></div><?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>