<?php
$siteConfig = app\components\CController::getSiteConfig();
?>
<aside class="city">
    <div class="city__inner">
        <h3 class="content__subtitle">Обслуживаемые города <b><?= $siteConfig['id'] == 52 ? 'Ленинградской' : 'Московской' ?> области</b></h3>
        <div class="citys">
            <ul>
                <?php foreach ($rows as $row): ?>
                <li><a href="/<?= $row['url']; ?>"><?= str_replace(['Ремонт кофемашин в городе ', '!'], '', $row['title']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</aside>