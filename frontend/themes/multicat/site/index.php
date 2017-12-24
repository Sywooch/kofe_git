<?php 
$assets = Yii::getAlias('@web');
$this->title = $page['meta_title'];
?>
<section id="number-4">
    <div class="container">
        <span class="colortext">Сервисный  центр Apple Repair:</span>
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
<section id="number-14">
    <div class="container">
        <?= $page['full_description']; ?>        
        <ul>
            <li><a class="colortext colorborder" href="/o-nas">О нас</a></li>
            <li><a class="colortext colorborder" href="/vakansii">Вакансии</a></li>
            <li><a class="colortext colorborder" href="/akcii">Акции</a></li>
        </ul>
    </div>
    <video poster="" id="bgvid" playsinline autoplay muted loop>
      <source src="<?= $assets ?>/multicat/video/fix.webm" type="video/webm">
      <source src="<?= $assets ?>/multicat/video/fix.mp4" type="video/mp4">
    </video>
</section>