<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
?>
<div class="wrapper__faults wrapper__faults--main">
    <div class="container">
        <div class="row">
            <div class="faults">
                <?php if (!empty($h3)): ?>
                    <div class="faults__title  page-title col-lg-16 col-sm-16">
                        <?= $h3; ?>
                    </div>
                <?php endif; ?>
                <div class="faults__teasers">
                    <div class="faults-teasers__title col-lg-24 col-sm-24">
                        <?= $title; ?>
                    </div>
                    <div class="faults-teasers__content">
                        <div class="faults-teasers__items col-lg-8 col-sm-8">
                            <?php foreach ($faults as $key => $fault): ?>
                                <?php if ($key >= 0 && $key <= 1): ?>
                                    <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $fault['url']; ?>" class="faults-teasers__item">
                                        <span class="faults-teasers__name">
                                            <?= $fault['title']; ?>
                                        </span>
                                        <span class="faults-teasers__cost">
                                            <span class="price-nowrap"><i>от</i> <span><?= round($fault['price']); ?></span> <i class="fa fa-rub" aria-hidden="true"></i> </span>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="faults__list col-lg-6 col-sm-7">
                            <?php foreach ($faults as $key => $fault): ?>                            
                                <?php if ($key >= 2 && $key <= 5): ?>
                                    <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $fault['url']; ?>" class="faults-list-item">
                                        <span class="faults-list__name">
                                            <?= $fault['title']; ?>
                                        </span>
                                        <span class="faults-list__cost">
                                            <span class="price-nowrap"><i>от</i> <span><?= round($fault['price']); ?></span> <i class="fa fa-rub" aria-hidden="true"></i> </span>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="faults__list col-lg-10 col-sm-9">
                            <?php foreach ($faults as $key => $fault): ?>
                                <?php if ($key >= 6 && $key <= 10): ?>
                                    <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $fault['url']; ?>" class="faults-list-item vis-desctop">
                                        <span class="faults-list__name">
                                            <?= $fault['title']; ?>
                                        </span>
                                        <span class="faults-list__cost">
                                            <span class="price-nowrap"><i>от</i> <span><?= round($fault['price']); ?></span> <i class="fa fa-rub" aria-hidden="true"></i> </span>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <a href="/uslugi" rel="nofollow" class="faults__all-services col-lg-14 col-sm-14 vis-mobile">
                            <span class="all-services__icon">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/arrow-right_tyRIguf.png" alt="">
                            </span>
                            <span class="all-services__text">
                                Подробный список неисправностей
                            </span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="faults__price">
                        <div class="faults-price__title col-lg-24 col-sm-24">
                            Популярные услуги
                        </div>
                        <div class="faults-price__content">
                            <div class="faults-price__item col-lg-9 col-sm-9">
                                <?php foreach ($services as $key => $service): ?>
                                    <?php if ($key >= 0 && $key <= 4): ?>
                                        <a class="faults-price__row">
                                            <span class="faults-price__name">
                                                <?= $service['title']; ?>
                                            </span>
                                            <span class="faults-price__cost">
                                                <span class="price-nowrap"><i>от</i> <span><?= round($service['price']); ?></span> <i class="fa fa-rub" aria-hidden="true"></i> </span>
                                            </span>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div class="faults-price__item col-lg-9 col-sm-9">
                                <?php foreach ($services as $key => $service): ?>
                                    <?php if ($key >= 5 && $key <= 10): ?>
                                        <a class="faults-price__row">
                                            <span class="faults-price__name">
                                                <?= $service['title']; ?>
                                            </span>
                                            <span class="faults-price__cost">
                                                <span class="price-nowrap"><i>от</i> <span><?= round($service['price']); ?></span> <i class="fa fa-rub" aria-hidden="true"></i> </span>
                                            </span>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <a href="/uslugi" rel="nofollow" class="faults__all-services col-lg-14 col-sm-14">
                        <span class="all-services__icon">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/arrow-right_tyRIguf.png" alt="">
                        </span>
                        <span class="all-services__text">
                            Полный список услуг и неисправностей
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>