<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<?php foreach ($rows as $row): ?>
<img  style="opacity: 0;position: absolute;z-index: -999999999;height: 100%;width: 100%;top: 0px;left: 0px;" src="/uploads/images/<?= $row['image']; ?>" alt="">
<?php endforeach; ?>

   
<noindex>
    <section class="promo-video">
        <div class="container">
            <div class="left">
                <iframe  src="https://www.youtube.com/embed/M3ebpSpcsro?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                <!--<div id="promo-video"></div>-->
            </div>
            <div class="right">
                <div class="title">Здравствуйте</div>
                <p>Компания RemontKofe специализируется на ремонте кофемашин с 2010 года, за это время мы набрали штат инженеров, с соответствующим образованием и наличием сертификатов. Среднее время ремонта кофемашин в нашем сервисном центре составляет - 24 часа! Мы работаем как с частными, так и с юр. лицами и гос. учреждениями. На весь произведённый ремонт и комплектующие предоставляем гарантию до 1 года. Выбирайте профессионалов, сделаем ремонт качественно и ответим за качество нашей работы!</p>
            </div>
        </div>
    </section>
<noindex>

<section id="brands">
    <div class="container">
        <p class="title"><span>Поддерживаем  </span> бренды</p>
        <div class="owl-carousel logos owl-theme">
            <?php foreach ($rows as $key => $row): ?>            
                <?php if (isset($siteConfig['1-line']) && $siteConfig['1-line'] === true): ?>
                    <div class="item brand">                    
                        <a href="/<?= $row['url']; ?>">                            
                            <img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                        </a>
                    </div>
                <?php else: ?>
                    <?php if ($key == 0 || ($key % 2) == 0): ?>
                        <div class="item brand">
                        <?php endif; ?>
                        <a href="/<?= $row['url']; ?>">                            
                            <img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                        </a>                
                        <?php if (($key % 2) == 1): ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>            
            <?php endforeach; ?>
        </div>
        <?php if ($cnt == 18): ?>
            <span class="more">
                <a href="/brendy">и еще 250 + брендов</a>
            </span>
        <?php endif; ?>
    </div>
</section>