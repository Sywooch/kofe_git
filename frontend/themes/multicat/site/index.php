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
            <p>Обращайтесь в наш Сервисный Центр – мы оперативно, качественно и недорого восстановим любое устройство Apple, и выдадим Вам гарантию на все произведённые услуги до 3х лет.</p>
            <span class="name colortext">Павел Арсенов</span>
            <span class="nick">Менеджер по продажам</span>                       
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