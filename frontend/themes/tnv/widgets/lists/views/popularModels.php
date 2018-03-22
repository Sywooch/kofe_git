<div data-slider-step="225" class="wide-slider clearfix">
    <div class="wide-slider--desc mb133">
        <div class="wide-slider--desc-content">
            <div class="lg-pr">
                <h2 class="wide-slider--title"><span class="">Популярные модели</span></h2>
                <div class="richtext wide-slider--text">
                    <p>Самые популярные модели, которые ремонтируются в нашем сервисном центре. Кстати, если в данном списке есть Ваша кофемашины - то Вы получаете <span style="color:red; font-size: 20px;">скидку в размере 30%</span> на ремонт! Мы Вас ждём!</p>
                    <p><a href="#" class="btn btn-primary btn-lg btn-outline">Онлайн заявка</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="wide-slider--content">
        <div class="wide-slider--control clearfix">
            <h3 class="wide-slider--stitle float--left"><span class="">Ремонт кофемашин</span></h3>
            <div class="wide-slider--buttons float--right"><a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a><a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a></div>
        </div>
        <div class="wide-slider--container">
            <div class="wide-slider--scroller">
                <?php foreach ($rows as $row): ?>
                    <a href="/<?= $row['url']; ?>" class="film-box">
                        <div class="film-box--img-cont"><img src="/uploads/images/<?= $row['image']; ?>" alt=""></div>
                        <div class="tag green"><?= $row['brand_title'] . ' ' . $row['title']; ?></div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>