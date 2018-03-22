<?php
$assets = Yii::getAlias('@web');
?>
<div data-slider-step="392" class="wide-slider bg clearfix">
    <div class="wide-slider--desc mb133">
        <div class="wide-slider--desc-content">
            <div class="lg-pr">
                <h2 class="wide-slider--title">
                    <span>Наши новости</span>
                </h2>
                <div class="richtext wide-slider--text">
                    <p>Новости из мира кофемашин. Всё самое актуальное и новое что необходимо знать.</p>
                    <p><a class="button-secondary" href="/news">Все новости</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="wide-slider--content">
        <div class="wide-slider--control clearfix">
            <h3 class="wide-slider--stitle float--left">Последние новости</h3>
            <div class="wide-slider--buttons float--right">
                <a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a>
                <a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a>
            </div>
        </div>
        <div class="wide-slider--container">
            <div class="wide-slider--scroller">
                <?php foreach ($rows as $row): ?>
                    <div class="card inline alt-margins" data-flatr="news 1790">
                        <a class="card--image" href="/<?= $row['url']; ?>" target="">
                            <img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" class="card--image-img">
                        </a>                    
                        <a href="/<?= $row['url']; ?>" class="card--title"><?= $row['title']; ?></a>
                        <div class="card--brief"><?= $row['description']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>