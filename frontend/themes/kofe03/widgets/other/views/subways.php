<?php
$siteConfig = app\components\CController::getSiteConfig();
?>
<aside class="city">
    <div class="City-in">
        <h3 class="content__subtitle">Обслуживаем <b><?= $siteConfig['id'] == 52 ? 'Санкт-Петербург и Ленинградскую' : 'Москву и Московcкую' ?> область</b></h3>
        <div class="citys">
            <ul>
                <?php foreach ($rows as $row): ?>
                <li><a href="/<?= $row['url']; ?>"><?= str_replace(['Ремонт кофемашин в городе ', '!'], '', $row['title']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</aside>