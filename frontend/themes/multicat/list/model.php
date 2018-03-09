<?php 
$breadcrumbs = [
    '/' . $brand['url'] => $brand['full_title'],
    $pageInfo['title'],
];
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $title;
$p = app\components\CController::$category;
$p['url'] = $pageInfo['url'];
?>
<?= multicat\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-5" style="background-image: url(/multicat/images/upload/banner.png);">
    <div class="container">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
        <?= !empty($pageInfo['description']) ? $pageInfo['description'] : (!empty($seoText['text1']) ? $seoText['text1'] : '') ; ?>        
        <a href="#" class="btn green open-popup colorbg colorbghover" data-tab="popup2" onclick="return false;">Записаться на ремонт</a>
        <div class="clear"></div>
    </div>
</section>
<?= multicat\widgets\sliders\Slider::widget(); ?>
<?= multicat\widgets\other\Advantage::widget(); ?>
<?= multicat\widgets\lists\AllPrices::widget(['parent' => $p]); ?>
<section id="number-8">
   <div class="container">
        <div class="title" style="float: none;">Ремонтируем следуюшие модели:</div>

        <div class="owl-carousel owl-theme">
           <a class="item colorborder" href="#">
              <div class="img"><img src="/uploads/images/remont-kofemashin-melitta-single-5-therm-mug.jpg"></div>
              <div class="text"><span>Ремонт</span>Single 5 Therm Mug</div>
           </a>
           <a class="item colorborder" href="#">
              <div class="img"><img src="/uploads/images/remont-kofemashin-melitta-single-5-therm-mug.jpg"></div>
              <div class="text"><span>Ремонт</span>Single 5 Therm Mug</div>
           </a>
           <a class="item colorborder" href="#">
              <div class="img"><img src="/uploads/images/remont-kofemashin-melitta-single-5-therm-mug.jpg"></div>
              <div class="text"><span>Ремонт</span>Single 5 Therm Mug</div>
           </a>
           <a class="item colorborder" href="#">
              <div class="img"><img src="/uploads/images/remont-kofemashin-melitta-single-5-therm-mug.jpg"></div>
              <div class="text"><span>Ремонт</span>Single 5 Therm Mug</div>
           </a>
           <a class="item colorborder" href="#">
              <div class="img"><img src="/uploads/images/remont-kofemashin-melitta-single-5-therm-mug.jpg"></div>
              <div class="text"><span>Ремонт</span>Single 5 Therm Mug</div>
           </a>
           <a class="item colorborder" href="#">
              <div class="img"><img src="/uploads/images/remont-kofemashin-melitta-single-5-therm-mug.jpg"></div>
              <div class="text"><span>Ремонт</span>Single 5 Therm Mug</div>
           </a>
           <a class="item colorborder" href="#">
              <div class="img"><img src="/uploads/images/remont-kofemashin-melitta-single-5-therm-mug.jpg"></div>
              <div class="text"><span>Ремонт</span>Single 5 Therm Mug</div>
           </a>
        </div>
   </div>
</section>
<?= multicat\widgets\lists\Neispravnost::widget(['category' => $p]); ?>
<section id="number-13">
    <div class="container">
        <?= multicat\widgets\lists\LastReviews::widget(); ?>
        <?= multicat\widgets\lists\LastNews::widget(); ?>
        <span class="clear"></span>
    </div>
</section>
<section id="number-15" class="active">
    <div class="container">
        <?= !empty($pageInfo['full_description']) ? $pageInfo['full_description'] : (!empty($seoText['text2']) ? $seoText['text2'] : '') ; ?>
    </div>
    <div class="bottom-btn">
        <span class="colortext colorborder">Развернуть описание</span>
    </div>
</section>
<section id="number-23">
    <a href="#" id="gotop" class="colorbg colorbghover"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>