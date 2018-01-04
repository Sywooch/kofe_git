<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <div class="breadcrumb">
            <a href="/">Главная</a>
            <a href="/">Ремонт <?= mb_strtolower($brand['full_title'], 'utf8'); ?></a>
            <a href="#">Ремонт <?= \app\components\CController::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8'); ?></a>
        </div>
    </div>
    <div class="main_container grey_container">
        <div class="inner_container" style="overflow: hidden;">
            <div class="product-category-left-info">
                <h1 class="category_h1" style="text-align: left;"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
                <div class="category-info">
                    <?php if (!empty($pageInfo['description'])): ?>
                        <?= $pageInfo['description']; ?>
                    <?php else: ?>
                        <p style="text-align: justify;"><span style="font-family:verdana,geneva,sans-serif;"><span style="font-size:14px;"><span style="color:#808080;">Ремонт <?= \app\components\CController::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8'); ?> предполагает выполнение операций, отличающихся сложностью и способом, который был выбран для восстановления устройства. С какой бы сложностью вы не столкнулись, заниматься самостоятельным ремонтом – задача, не оправдывающая ни затраченных средств, ни времени. К тому же, – это мероприятие может быть убыточным, так как любое неумелое действие способно привести к выходу устройства из строя.<br>
                                        <br>
                                        Сервисный центр выполняет восстановительные операции посредством передового технического оснащения. Вам не придется длительно ожидать поставки запчастей – все необходимое присутствует в наличии.&nbsp;</span></span></span>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="product-category-right-info">
                <img src="/uploads/images/<?= $pageInfo['image']; ?>" alt="<?= $pageInfo['title']; ?>">
            </div>
        </div>
    </div>
    <?= multicatXspb\widgets\lists\Services::widget(['title' => 'Цены по услугам:', 'category_id' => \app\components\CController::$category['id'], 'type' => 1, 'is_popular' => true, 'urlPrefix' => Yii::$app->request->pathInfo . '/']); ?>
    <?= multicatXspb\widgets\lists\Services::widget(['title' => 'Цены по прочим услугам:', 'category_id' => \app\components\CController::$category['id'], 'type' => 1, 'is_popular' => false]); ?>
    <?= multicatXspb\widgets\lists\Services::widget(['title' => 'Цены по неиправностям:', 'category_id' => \app\components\CController::$category['id'], 'type' => 2, 'is_popular' => true, 'urlPrefix' => Yii::$app->request->pathInfo . '/']); ?>
    <?= multicatXspb\widgets\other\HowWeWork::widget(); ?>
</div>
<?= multicatXspb\widgets\forms\FooterForm::widget(); ?>