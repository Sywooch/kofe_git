<?php $this->title = $model['meta_title']; ?>
<section id="main">
    <div class="container news-inner">
        <h1><?= $model['title']; ?></h1>
        <?= $model['full_description']; ?>
    </div>    
</section>
<?= \app\widgets\other\Advantage::widget(); ?>