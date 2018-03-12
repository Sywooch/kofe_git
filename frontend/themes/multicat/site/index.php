<?php

use app\components\CController;

$assets = Yii::getAlias('@web');
$russianName = '';
if (isset(Yii::$app->params['brandRussianNames'][CController::$monoBrand['title']]))
    $russianName = ' (' . Yii::$app->params['brandRussianNames'][CController::$monoBrand['title']] . ')';
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : 'Ремонт ' . \app\components\CController::$monoBrand['title'] . $russianName . ' ⚒ в ' . Yii::$app->session['region']['titleRod'];
?>
<section id="number-4">
    <div class="container">
        <h1><?= $page['meta_h1']; ?></h1>
        <?= $page['description']; ?>
        <img src="<?= $assets ?>/multicat/images/gl-master.png" alt="">
        <div class="comment-gl">
            <p>У вас сломалась бытовая техника? Обращайтесь к нам! Мы выполним ремонт <?= \app\components\CController::$monoBrand['title']; ?> максимально быстро, качественно и недорого, а также дадим гарантию  на комплектующие и нашу работу сроком до 1 года! </p>
            <span class="name colortext">АНДРЕЙ БЕЛОВ</span>
            <span class="nick">ИНЖЕНЕР ПО РЕМОНТУ БЫТОВОЙ ТЕХНИКИ</span>                       
        </div>
    </div>
</section>
<?= multicat\widgets\sliders\Slider::widget(); ?>
<?= multicat\widgets\other\Advantage::widget(); ?>
<?= multicat\widgets\lists\MainModels::widget(); ?>
<section id="number-13">
    <div class="container">
        <?= multicat\widgets\lists\LastReviews::widget(); ?>
        <?= multicat\widgets\lists\LastNews::widget(); ?>
        <span class="clear"></span>
    </div>
</section>
<section id="number-15" class="active">
    <div class="container">
        <?= $page['full_description']; ?>   
    </div>
    <div class="bottom-btn">
        <span class="colortext colorborder">Развернуть описание</span>
    </div>
</section>
<section id="number-23">
    <a href="#" id="gotop" class="colorbg colorbghover"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>