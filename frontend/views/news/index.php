
<section id="main">
    <div class="container">
        <ul class="news-list">
            <li class="newss">
                <a href="#">
                    <div class="img">
                        <img src="/images/newss.jpg" alt="">
                    </div>
                    <h3>Что такое Lorem Ipsum?</h3>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                </a>
            </li>
            <li class="newss">
                <a href="#">
                    <div class="img">
                        <img src="/images/newss.jpg" alt="">
                    </div>
                    <h3>Что такое Lorem Ipsum?</h3>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                </a>
            </li>
            <li class="newss">
                <a href="#">
                    <div class="img">
                        <img src="/images/newss.jpg" alt="">
                    </div>
                    <h3>Что такое Lorem Ipsum?</h3>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                </a>
            </li>
            <li class="newss">
                <a href="#">
                    <div class="img">
                        <img src="/images/newss.jpg" alt="">
                    </div>
                    <h3>Что такое Lorem Ipsum?</h3>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                </a>
            </li>
            <li class="newss">
                <a href="#">
                    <div class="img">
                        <img src="/images/newss.jpg" alt="">
                    </div>
                    <h3>Что такое Lorem Ipsum?</h3>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                </a>
            </li>
            <li class="newss">
                <a href="#">
                    <div class="img">
                        <img src="/images/newss.jpg" alt="">
                    </div>
                    <h3>Что такое Lorem Ipsum?</h3>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                </a>
            </li>
            <li class="newss">
                <a href="#">
                    <div class="img">
                        <img src="/images/newss.jpg" alt="">
                    </div>
                    <h3>Что такое Lorem Ipsum?</h3>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                </a>
            </li>
            <li class="newss">
                <a href="#">
                    <div class="img">
                        <img src="/images/newss.jpg" alt="">
                    </div>
                    <h3>Что такое Lorem Ipsum?</h3>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                </a>
            </li>
            <li class="newss">
                <a href="#">
                    <div class="img">
                        <img src="/images/newss.jpg" alt="">
                    </div>
                    <h3>Что такое Lorem Ipsum?</h3>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                </a>
            </li>
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
<!--
<?php $this->title = $model['meta_title']; ?>
<section id="main">
    <div class="container">
        <ul class="news-list">
            <?php foreach ($models as $model): ?>
                <li class="newss">
                    <div class="img">
                        <img src="/images/contect-bg2.jpg" alt="">
                    </div>
                    <span class="date"><?= date('d.m.Y', strtotime($model['date'])); ?></span>
                    <h3>
                        <a href="/<?= $model['url']; ?>"><?= $model['title']; ?></a>
                    </h3>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>-->
