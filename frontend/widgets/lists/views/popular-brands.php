<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<?php foreach ($rows as $row): ?>
<img  style="opacity: 0;position: absolute;z-index: -999999999;height: 100%;width: 100%;top: 0px;left: 0px;" src="/uploads/images/<?= $row['image']; ?>" alt="">
<?php endforeach; ?>

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
<noindex>
<?php endif; ?>
	

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