<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<main class="layout__content" role="main">
    <aside class="poster" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?php if ($siteConfig['id'] == 52): ?>j/<?php endif; ?>poster_1.jpg);">
        <div class="poster__inner">
            <?= kofe03\widgets\forms\MainPageForm::widget(); ?>
            <div class="poster__content">
                <h1 class="poster__title" itemprop="name"><?= $page['meta_h1']; ?></h1>
                <div class="poster__text" itemprop="description">
                    <?= $page['description']; ?>
                </div>
            </div>
            <div class="poster__actions">
                <a class="poster_button js-popup" data-popup="request" href="#">Вызвать курьера</a>
            </div>
            <footer class="poster__footer">
                <div class="menu__actions">
                    <a class="menu__action js-popup" data-popup="request" href="#">
                        <span class="menu__action-ico">
                            <svg class="menu__action-img" xmlns="http://www.w3.org/2000/svg" width="29" height="35" viewBox="0 0 29 32.56">
                            <path class="menu__action-ico_path" fill-rule="evenodd" d="M14 19c3,0 8,-3 8,-9 0,-1 0,-2 0,-3 0,-2 0,-3 -1,-4 -1,-2 -3,-3 -7,-3 -3,0 -5,1 -6,3 -1,1 -1,2 -1,4 0,1 0,2 0,3 0,6 5,9 7,9zm10 14l0 0 -3 0c0,0 0,-1 0,-1 0,-1 0,-2 0,-2l3 0c0,0 0,0 0,0 0,0 0,0 0,0 0,-1 -2,-2 -3,-2 -1,0 -1,1 -2,1 0,1 -1,1 -1,1l-7 0c-1,-1 -2,-2 -3,-2 -1,0 -3,1 -3,2 0,0 0,0 0,0 0,0 0,0 0,0l0 0 3 0c0,0 0,1 0,2 0,0 0,1 0,1l-3 0c0,0 0,0 0,0 0,0 0,0 0,0 0,1 2,2 3,2l0 0c1,0 1,0 2,-1 0,0 1,-1 1,-1l7 0c1,1 2,2 3,2 0,0 0,0 0,0 1,0 3,-1 3,-2 0,0 0,0 0,0 0,0 0,0 0,0zm5 -4c0,-3 -1,-6 -3,-7 -1,-1 -5,-3 -7,-4l0 0c0,0 0,0 0,0 -1,1 -2,1 -3,2 0,0 0,0 0,0l-2 3 -1 -3c0,0 0,0 0,0 -1,-1 -2,-1 -3,-2 0,0 0,0 0,0 -2,1 -6,3 -7,4 -2,1 -3,6 -3,7 0,0 0,0 0,0 0,0 1,2 4,3 0,0 0,0 1,0 -1,0 -1,-1 -1,-1 -1,-1 -1,-1 0,-2 0,-1 2,-2 4,-2 1,0 3,1 4,2l5 0c1,0 1,0 1,-1 1,0 2,-1 3,-1l0 0 0 0c2,0 4,1 4,2 1,1 1,1 0,2 0,0 0,0 -1,1 1,0 1,0 1,0 3,-1 4,-3 4,-3 0,0 0,0 0,0zm-12 -26c0,1 0,1 -1,2 -1,0 -2,0 -3,0 -1,-1 -1,-1 -1,-2 2,0 3,0 5,0zm-9 5c0,0 0,1 1,1 1,0 2,-2 5,-2 4,0 5,2 6,2 1,0 1,-1 1,-1 0,1 0,1 0,2 0,3 -1,5 -2,6 -2,1 -4,2 -5,2 0,0 -2,-1 -4,-2 -1,-1 -2,-3 -2,-6 0,-1 0,-1 0,-2z"/>
                            </svg>
                        </span>
                        <span class="menu__action-text">Вызвать курьера</span>
                        <span class="menu__action-arrow">
                            <svg class="menu__action-right" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                            <path class="menu__action-ico_path" d="M1393.6,990.423a1.891,1.891,0,0,1,0-1.153,2.247,2.247,0,0,1,.28-0.461,3.006,3.006,0,0,1,.45-0.438,1.787,1.787,0,0,1,.46-0.277,1.694,1.694,0,0,1,.61-0.093h0.11a1.492,1.492,0,0,1,1.01.508l1.04,0.992q1.545,1.488,3,3L1402,994l-1.44,1.5q-1.455,1.51-3,3l-0.97.935a1.57,1.57,0,0,1-2.1.288,2.949,2.949,0,0,1-.7-0.692,1.63,1.63,0,0,1-.28-0.946,1.731,1.731,0,0,1,.55-1.142l1-1.1h-6.09a1.839,1.839,0,0,1-.9-0.185,2.771,2.771,0,0,1-.51-0.369,2.828,2.828,0,0,1-.37-0.507,1.715,1.715,0,0,1,0-1.569,2.005,2.005,0,0,1,.88-0.877,1.852,1.852,0,0,1,.9-0.184h6.18l-0.61-.588a6.114,6.114,0,0,1-.61-0.635,2.077,2.077,0,0,1-.33-0.508" transform="translate(-1387 -988)"/>
                            </svg>
                        </span>
                    </a>
                    <a class="menu__action js-popup" data-popup="request" href="#">
                        <span class="menu__action-ico">
                            <svg class="menu__action-img" xmlns="http://www.w3.org/2000/svg" width="33" height="28" viewBox="0 0 20.41 31.906">
                            <path class="menu__action-ico_path" fill-rule="evenodd" d="M22 19c-3,-2 -5,3 -6,2 -3,-2 -7,-4 -8,-8 -1,-1 4,-3 2,-6 -6,-6 -5,-5 -9,-1 -5,4 8,22 19,23 3,0 3,-1 5,-3 3,-2 0,-4 -3,-7zm2 -14c-2,-3 -5,-5 -9,-5l0 2c6,1 11,6 12,12l2 0c-1,-4 -2,-7 -5,-9zm-3 9l2 0c-1,-4 -4,-8 -8,-8l-1 2c4,0 6,3 7,6z"/>
                            </svg>
                        </span>
                        <span class="menu__action-text">Заказать звонок</span>
                        <span class="menu__action-arrow">
                            <svg class="menu__action-right" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                            <path class="menu__action-ico_path" d="M1393.6,990.423a1.891,1.891,0,0,1,0-1.153,2.247,2.247,0,0,1,.28-0.461,3.006,3.006,0,0,1,.45-0.438,1.787,1.787,0,0,1,.46-0.277,1.694,1.694,0,0,1,.61-0.093h0.11a1.492,1.492,0,0,1,1.01.508l1.04,0.992q1.545,1.488,3,3L1402,994l-1.44,1.5q-1.455,1.51-3,3l-0.97.935a1.57,1.57,0,0,1-2.1.288,2.949,2.949,0,0,1-.7-0.692,1.63,1.63,0,0,1-.28-0.946,1.731,1.731,0,0,1,.55-1.142l1-1.1h-6.09a1.839,1.839,0,0,1-.9-0.185,2.771,2.771,0,0,1-.51-0.369,2.828,2.828,0,0,1-.37-0.507,1.715,1.715,0,0,1,0-1.569,2.005,2.005,0,0,1,.88-0.877,1.852,1.852,0,0,1,.9-0.184h6.18l-0.61-.588a6.114,6.114,0,0,1-.61-0.635,2.077,2.077,0,0,1-.33-0.508" transform="translate(-1387 -988)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </footer>
        </div>
    </aside>
    <?= kofe03\widgets\lists\TopServices::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
    <?= kofe03\widgets\lists\PopularServices::widget(); ?>
    <?= kofe03\widgets\lists\LastReviews::widget(); ?>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\other\Subways::widget(); ?>
</main>