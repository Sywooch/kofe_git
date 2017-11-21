<?php 
$breadcrumbs = [
    $model['title'],
];
$this->title = $model['meta_title'];
?>
<?= ifixme\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-16">    
    <div class="container">
        <div class="for-center">
            <span class="data">18 марта 2014</span>
        </div>
         <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title'] ?></h1>
        <?= $model['description']; ?>
    </div>
</section>
<section id="number-23">
    <a id="gotop" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <p>Вернуться <br>наверх</p>
</section>