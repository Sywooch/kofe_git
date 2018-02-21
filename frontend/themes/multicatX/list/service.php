<?php
$assets = '/' . Yii::getAlias('@web');
$breadcrumbs = [
    '/' . \app\components\CController::$category['url'] => \app\components\CController::$category['full_title'],
    !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] . ' ' . \app\components\CController::$category['title'],
];
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>    
    <div class="main_container grey_container">
        <div class="inner_container" style="overflow: hidden;">
            <div class="product-category-left-info">
                <h1 class="category_h1" style="text-align: left;"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $h1; ?></h1>
                <div class="category-info">
                    <?php if (!empty($pageInfo['description'])): ?>
                        <?= str_replace(['#model_en#', '#brand_en#'], \app\components\CController::$monoBrand['title'], $pageInfo['description']); ?>
                    <?php else: ?>
                        <p style="text-align: justify;"><span style="font-family:verdana,geneva,sans-serif;"><span style="font-size:14px;"><span style="color:#808080;">Ремонт <?= \app\components\CController::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8'); ?> предполагает выполнение операций, отличающихся сложностью и способом, который был выбран для восстановления устройства. С какой бы сложностью вы не столкнулись, заниматься самостоятельным ремонтом – задача, не оправдывающая ни затраченных средств, ни времени. К тому же, – это мероприятие может быть убыточным, так как любое неумелое действие способно привести к выходу устройства из строя.<br>
                                        <br>
                                        Сервисный центр выполняет восстановительные операции посредством передового технического оснащения. Вам не придется длительно ожидать поставки запчастей – все необходимое присутствует в наличии.&nbsp;</span></span></span>
                        </p>
                    <?php endif; ?>
                </div>

                <div class="main_product_buy">
                    <div class="main_product_time">
                        <div class="main_product_time_top">Время ремонта</div>
                        <div class="main_product_time_bottom">от 1,5 час.</div>
                    </div>
                    <div class="main_product_price">
                        <div class="main_product_price_top">Стоимость ремонта</div>
                        <div class="main_product_price_bottom">
                            <span class="main_product_price_from">от</span> <span class="main_product_price_price colortext">3 200</span><sup class="main_product_price_roubles colortext"> руб.</sup>
                        </div>
                    </div>
                    <div class="main_product_cart">
                        <a id="button-cart" class="button colorbg mini-form"><span>Заказать</span></a>
                    </div>
                </div>
            </div>
            <div class="main_product_right">
                <div class="image">
                    <img src="http://service-xiaomi.com/image/cache/data/categories/Uslugi/Osnovnie/Smartfony/centr-zamena-displeya-a-328x300.jpg" title="" alt="" id="image">
                </div>
            </div>
        </div>
    </div>
</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>