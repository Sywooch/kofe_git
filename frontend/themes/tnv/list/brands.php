<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
$breadcrumbs = [
    'Бренды',
];
?>
<div class="aside-layout container mb166">
    <div class="row sticky-parent">
        <aside class="aside float--left col-xs-12 col-md-4" data-stick="true">
            <div class="aside--inner sm-reverse lg-pr">
                <div class="mb">
                    <?= tnv\widgets\other\LeftMenu::widget(); ?>
                </div>
            </div>
        </aside>
        <div class="page float--right col-xs-12 col-md-8">
            <div data-flatr="webpage 46">
                <h1 class="page--title"><?= $pageInfo['meta_h1']; ?></h1>
            </div>
            <div class="new-package">
                <div class="package-item--head clearfix" data-package="west_kinoplus" data-package-star="" data-flatr="package 78">                    
                    <div class="channels-search--box float--right">
                        <div class="channels-search">
                            <?=
                            yii\jui\AutoComplete::widget([
                                'name' => 'models',
                                'clientOptions' => [
                                    'source' => $searches,
                                    'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                                ],
                                'options' => ['placeholder' => 'Поиск брендов..', 'class' => 'channels-search--input'],
                                    ]
                            );
                            $path = Yii::getAlias('@frontend') . '/web/uploads/images/';
                            ?>
                            <i class="icon-search channels-search--icon"></i>
                        </div>
                    </div>
                </div>
                <div class="new-package--desc"><?= $pageInfo['description']; ?></div>
                <div class="new-package--channels">
                    <?php foreach ($sortedBrands as $latter => $brands): ?>
                        <div class="new-package--channels-label"><?= $latter; ?></div>
                        <?php foreach ($brands as $brand): ?>
                            <a href="/<?= $brand['url']; ?>" class="new-package--channel">
                                <?php if (!is_file($path . $brand['image'])): ?>
                                    <?= $brand['title']; ?>
                                <?php else: ?>
                                    <img src="/uploads/images/<?= $brand['image']; ?>"/>
                                <?php endif; ?>
                                <span><?= $brand['title']; ?></span>
                            </a>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>