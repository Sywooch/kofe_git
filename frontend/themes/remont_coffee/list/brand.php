<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
    </div>
</div>
<?= remont_coffee\widgets\other\Advantage::widget(); ?>

<div class="full-text first-text">
    <div class="container width-img">
        <?php if (!empty($pageInfo['image'])): ?>
            <div class="img">
                <img class="brand-images" src="/uploads/images/<?= $pageInfo['image']; ?>" />
            </div>
        <?php endif; ?>

        <!--
        <?php if (!empty($pageInfo['description'])): ?>
            <div class="text">
                <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
            </div>
        <?php endif; ?>
    -->
            <div class="text">
                <p>Сервисная организация по ремонту кофеоборудования BORK предлагает Вам первоклассные услуги по ремонту кофейного оборудования всех марок. Предприятие реализует полное обслуживание кофейной техники по низкой цене и кратчайшим срокам. Мастерские фирмы оборудованы новейшей техникой, которая позволяет проводить диагностическое обследование максимально продуктивно. Все запасные части заранее закупаются у авторизованных фирм-производителей, и на них предоставляется гарантия, длительностью до 12 месяцев года. В целях экономии времени, Вы можете оформить услугу курьерской доставки через специальную форму, на сайте или просто позвонив по телефонам, опубликованным на сайте.</p>
            </div>
        <hr>
    </div>
</div>

<?= remont_coffee\widgets\lists\Neispravnost::widget(['title' => 'Типовые  <span>неисправности</span> ' . $pageInfo['title']]); ?>

<div class="full-text">
    <div class="container">
        <?php if (!empty($pageInfo['full_description'])): ?>
            <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['full_description']); ?>
        <?php endif; ?>
    </div>
</div>

<div class="models">
    <div class="container">
        <?= remont_coffee\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo['title']]); ?>
    </div> 
</div>