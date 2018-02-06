<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="reviews">
    <div class="container">
        <div class="row">
            <div class="col-xs-16">
                <h2 class="title title__2">Отзывы клиентов</h2>
                <div class="reviews-list" id="reviews-slider">
                    <?php foreach ($rows as $row): ?>
                        <div class="review">
                            <div class="review-wrap">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="review_pic">
                                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>reviews/<?= $row['image']; ?>" alt="<?= $row['username']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-16">
                                        <div class="review_name"><?= $row['username']; ?></div>
                                    </div>
                                </div>
                                <div class="review_claim">
                                    <!--<?= $row['message']; ?>-->
                                    <p>Внезапно в офисе поломалась кофемашина марки Bork. Что-бы не терять время и не усложнять последующий ремонт, отправился сразу в сервис Ремонт-Кофемашин по совету одного из сотрудников. После посещения договорился о заборе устройства из офиса и последующей доставке в офис. Ремонт занял 2 дня (с учётом всех доставок). Всё было сделано качественно, и одну из деталей заменили бесплатно. Мастера молодцы, всем советую!</p>                                    
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>                    
                </div>
            </div>
            <div class="col-xs-8">
                <h2 class="title title__2">Оставить отзыв</h2>
                <div class="form dark">
                    <form action="#">
                        <div class="row">
                            <div class="col-xs-16">
                                <input type="text" id="" class="" name="Reviews[username]" placeholder="Ваше имя" aria-required="true">
                            </div>
                            <div class="col-xs-8">
                                xxxxx
                            </div>
                            <div class="col-xs-24">
                                <textarea id="" class="" name="Reviews[message]" placeholder="Содержание отзыва" aria-required="true"></textarea>
                            </div>
                            <div class="col-xs-24">
                                <button type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>