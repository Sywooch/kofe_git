<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="promo-block promo-block--order">
    <div class="container">
        <div class="row">
            <div class="promo promo--price">
                <div class="promo__logo col-lg-5 col-sm-7 col-xs-17">
                    <a href="/">
                        <img src="/<?= $siteConfig['theme'] . '/'; ?>media/logo--inner_6BXZU7h.png" alt="">
                    </a>
                    <div class="promo-logo__city">Москва</div>
                </div>
            </div>
            <div class="col-lg-14 col-sm-17">
                <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
            </div>
        </div>
    </div>
</div>