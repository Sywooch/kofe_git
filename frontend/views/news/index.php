<?php $this->title = $model['meta_title']; ?>
<div class="container">
    <div class="page__in">
        <aside class="sidebar"></aside>     
        <section class="main-content">
            <ul class="news-list">
                <?php foreach ($models as $model): ?>
                    <li>
                        <span class="date"><?= date('d.m.Y', strtotime($model['date'])); ?></span>
                        <h3>
                            <a href="/<?= $model['url']; ?>"><?= $model['title']; ?></a>
                        </h3>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <?php
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pagination,
        ]);
        ?>
    </div>
</div> 
