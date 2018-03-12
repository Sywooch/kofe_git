<?php

$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $title;

if(in_array(\app\components\CController::$category['id'], [7, 8])) {
    $bImage = \app\components\CController::$monoBrand['url'] . '_' . \app\components\CController::$category['url'] . '.jpg';
} else {
    $bImage = \app\components\CController::$category['url'] . '.jpg';
}
?>
<?= multicat\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-5" style="background-image: url(/multicat/images/upload/<?= $bImage; ?>);">
    <div class="container">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $h1; ?></h1>
        <?= str_replace(['#model_en#', '#brand_en#'], \app\components\CController::$monoBrand['title'] . ($page['type'] == 'model' ? ' ' . $page['title'] : ''), $pageInfo['description']); ?>
        <a href="#" class="btn green open-popup colorbg colorbghover" data-tab="popup2" onclick="return false;">Записаться на ремонт</a>
        <div class="clear"></div>
    </div>
</section>
<?= multicat\widgets\sliders\Slider::widget(); ?>
<?= multicat\widgets\other\Advantage::widget(); ?>
<?= isset($page['type']) && $page['type'] == 'category' ? multicat\widgets\lists\OtherModels::widget(['parent' => $page['id'], 'urlPrefix' => $pageInfo['url']]) : '' ?>
<section id="number-13">
    <div class="container">
        <?= multicat\widgets\lists\LastReviews::widget(); ?>
        <?= multicat\widgets\lists\LastNews::widget(); ?>
        <span class="clear"></span>
    </div>
</section>

<?php if(!empty($page['full_description'])): ?>
    <section id="number-15" class="active">
        <div class="container">
            <?= !empty($pageInfo['full_description']) ? $pageInfo['full_description'] : ''; ?>
        </div>
        <div class="bottom-btn">
            <span class="colortext colorborder">Развернуть описание</span>
        </div>
    </section>
    <section id="number-23">
        <a href="#" id="gotop" class="colorbg colorbghover"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    </section>


<?php endif; ?>
