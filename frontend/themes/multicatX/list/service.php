<?php
$breadcrumbs = [
    '/' . \app\components\CController::$category['url'] => \app\components\CController::$category['full_title'],
    !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] . ' ' . \app\components\CController::$category['title'],
];
$this->title = isset($pageInfo['meta_title']) ? $pageInfo['meta_title'] : '';
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>    
    <div class="main_container grey_container">
        <div class="inner_container" style="overflow: hidden;">
            <div class="product-category-left-info">
                <h1 class="category_h1" style="text-align: left;"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] . ' ' . \app\components\CController::$category['title']; ?></h1>
                <div class="category-info">
                    <?php if (!empty($pageInfo['description'])): ?>
                        <?= str_replace('#model_en#', \app\components\CController::$monoBrand['title'] . ' ' . $pageInfo['title'], $pageInfo['description']); ?>
                    <?php else: ?>
                        <p style="text-align: justify;"><span style="font-family:verdana,geneva,sans-serif;"><span style="font-size:14px;"><span style="color:#808080;">Ремонт <?= \app\components\CController::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8'); ?> предполагает выполнение операций, отличающихся сложностью и способом, который был выбран для восстановления устройства. С какой бы сложностью вы не столкнулись, заниматься самостоятельным ремонтом – задача, не оправдывающая ни затраченных средств, ни времени. К тому же, – это мероприятие может быть убыточным, так как любое неумелое действие способно привести к выходу устройства из строя.<br>
                                        <br>
                                        Сервисный центр выполняет восстановительные операции посредством передового технического оснащения. Вам не придется длительно ожидать поставки запчастей – все необходимое присутствует в наличии.&nbsp;</span></span></span>
                        </p>
                    <?php endif; ?>
                </div>
            </div>            
        </div>
    </div>
</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>