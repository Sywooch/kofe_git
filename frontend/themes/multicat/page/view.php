<?php 
$breadcrumbs = [
    $model['title'],
];
$this->title = $model['meta_title'];
?>
<?= multicat\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-16">    
    <div class="container">
        <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title'] ?></h1>
        <?= $model['description']; ?>
    </div>
</section>
<section id="number-23">
    <a id="gotop" class="colorbg colorbghover" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>