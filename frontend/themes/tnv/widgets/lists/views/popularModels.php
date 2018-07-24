<div data-slider-step="225" class="wide-slider clearfix">
    <div class="wide-slider--desc mb133">
        <div class="wide-slider--desc-content">
            <div class="lg-pr">
                <h2 class="wide-slider--title"><span class="">Популярные модели</span></h2>
                <div class="richtext wide-slider--text">
                    <p>Самые популярные модели, которые ремонтируются в нашем сервисном центре. Кстати, если в данном списке есть Ваша кофемашины - то Вы получаете <span style="color:red; font-size: 20px;">скидку в размере 30%</span> на ремонт! Мы Вас ждём!</p>
                    <p><a href="#" class="btn btn-primary btn-lg btn-outline" data-toggle="modal" data-target="#online-zayavkamy">Заказать звонок</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="wide-slider--content">
        <div id="slider-model-my" class="owl-carousel owl-theme">
            <?php foreach ($rows as $row): ?>
                <a href="/<?= $row['url']; ?>" class="film-box">
                    <div class="film-box--img-cont"><img src="/uploads/images/<?= $row['image']; ?>" alt=""></div>
                    <div class="tag green"><?= $row['brand_title'] . ' ' . $row['title']; ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>