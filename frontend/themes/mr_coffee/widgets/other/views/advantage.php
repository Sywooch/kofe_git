<div class="row">
    <div class="col-12">
        <div class="sides-shadow">
            <ul class="privilegies__list reset-list">
                <li class="privilegies__item">
                    <img class="privilegies__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/decorative/train.svg" alt="train">
                    <div class="privilegies__text">Бесплатная доставка кофемашин</div>
                </li>
                <li class="privilegies__item">
                    <img class="privilegies__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/decorative/tools.svg" alt="tools">
                    <div class="privilegies__text">Бесплатная диагностика до начала ремонта</div>
                </li>
                <li class="privilegies__item">
                    <img class="privilegies__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/decorative/man-figure.svg" alt="man-figure">
                    <div class="privilegies__text">Ремонт кофемашины проводится не более 24 часов</div>
                </li>
                <li class="privilegies__item">
                    <img class="privilegies__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/decorative/lbl.svg" alt="lbl">
                    <div class="privilegies__text">Предоставляем скидку 10% при заказе услуг с сайта</div>
                </li>
            </ul>
        </div>
        <div class="phone-info">
            <div class="phone-img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/decorative/phone.svg" alt="phone"></div>
            <p class="phone-info__number">
                <span class="text-bold"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"></a>, </span>
                <span class="phone-info__text">Принимаем звонки с 08:00 до 22:00</span>
            </p>
        </div>
    </div>
</div>