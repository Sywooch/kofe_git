<?php $this->title = $model['meta_title']; ?>
<section id="main">
    <div class="container">
        <ul class="news-list">
            <?php foreach ($models as $model): ?>
                <li class="newss">
                    <a href="/<?= $model['url']; ?>">
                        <?php if (!empty($model['image'])): ?>
                            <div class="img">
                                <img src="/uploads/images/<?= $model['image']; ?>" alt="">
                            </div>
                        <?php endif; ?>
                        <h3><?= $model['title']; ?></h3>
                        <p><?= $model['description']; ?></p>
                    </a>
                </li>
            <?php endforeach; ?>
            <div class="clear"></div>
        </ul>
        <?php
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pagination,
        ]);
        ?>
        <div class="clear"></div>
    </div>
</section>