<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="contacts">
    <div class="page-wrap">
        <div class="contacts-info-wrap">
            <div class="contacts-info">
                <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
                <?= $pageInfo['description']; ?>
                <hr/>
            </div>
        </div>
    </div>
    <div class="contacts-map" id="contacts-map"></div>
</div>