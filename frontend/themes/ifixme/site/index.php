<?php 
$assets = Yii::getAlias('@web');
?>
<section id="number-4">
    <div class="container">
        <span>Сервисный  центр Apple Repair:</span>
        <h1><?= $page['meta_h1']; ?></h1>
        <?= $page['description']; ?>
        <img src="<?= $assets ?>/ifixme/images/gl-master.png" alt="">
        <div class="comment-gl">
            <p>Качественный сервис европейского уровня, ориентированный прежде всего на высокое качество работы и при этом минимальные затраты Вашего времени. И на данный момент все это нам удается ;)</p>
            <span class="name">Павел Арсенов</span>
            <span class="nick">Менеджер по продажам</span>                       
        </div>
    </div>
</section>
<?= ifixme\widgets\sliders\Slider::widget(); ?>
<?= ifixme\widgets\other\Advantage::widget(); ?>
<?= ifixme\widgets\lists\MainModels::widget(); ?>
<section id="number-13">
    <div class="container">
        <?= ifixme\widgets\lists\LastReviews::widget(); ?>
        <?= ifixme\widgets\lists\LastNews::widget(); ?>
        <span class="clear"></span>
    </div>
</section>
<section id="number-14">
    <div class="container">
        <?= $page['full_description']; ?>        
        <ul>
            <li><a href="/o-nas">О нас</a></li>
            <li><a href="/vakansii">Вакансии</a></li>
            <li><a href="/akcii">Акции</a></li>
        </ul>
    </div>
</section>