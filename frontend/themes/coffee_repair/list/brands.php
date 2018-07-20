<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
$breadcrumbs = [
    'Бренды',
];
?>
<?= coffee_repair\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="prosto-stranici-text">
    <div class="page-wrap">
        <h1><?= $pageInfo['meta_h1']; ?></h1>
        <?= $pageInfo['description']; ?>        
    </div>
</div>
<div class="box-links-img-full-strings">
    <div class="page-wrap">
        <div class="content8">
            <div class="search">
                <div class="head_search">
                    <?=
                    yii\jui\AutoComplete::widget([
                        'name' => 'models',
                        'clientOptions' => [
                            'source' => $searches,
                            'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                        ],
                        'options' => ['placeholder' => 'Введите название кофемашины PHILIPS'],
                            ]
                    );
                    $path = Yii::getAlias('@frontend') . '/web/uploads/images/';
                    ?>
                    <span>Поиск брендов</span>
                </div>
            </div>
        </div>
        <ul>
            <?php foreach ($sortedBrands as $latter => $brands): ?>
                <?php foreach ($brands as $brand): ?>
                    <li>
                        <a href="/<?= $brand['url']; ?>" title="Ремонт кофемашин <?= $brand['title']; ?>">
                            <?php if (!is_file($path . $brand['image'])): ?>
                                <?= $brand['title']; ?>
                            <?php else: ?>
                                <img src="/uploads/images/<?= $brand['image']; ?>"/>
                            <?php endif; ?>
                            <?= $brand['title']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>