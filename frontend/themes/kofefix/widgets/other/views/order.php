<div class="wrapper__order">
    <div class="container">
        <div class="row">
            <div class="order">
                <div class="order__request col-lg-11 col-lg-offset-1 col-sm-12">
                    <div class="order-request__title">
                        Хотите пить кофе уже сегодня? Просто оставьте заявку!
                    </div>
                    <a href="zakaz/index.html" rel="nofollow" class="order-request__button col-lg-16 col-sm-16 col-xs-24">
                        Оставить заявку
                    </a>
                    <a href="question/index.html" rel="nofollow" class="order-request__question">
                    </a>
                </div>
                <div class="order__phone col-lg-12 col-sm-12">
                    <div class="order-phone__title">
                        Позвоните нам и мы проконсультируем Вас по всем вопросам!
                    </div>
                    <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" rel="nofollow" class="order-phone__number">
                        <?= Yii::$app->session['region']['phone']; ?>
                    </a>
                    <div class="order-phone__on-air">
                        <div class="on-air__logo">OnAir</div>
                        <div class="on-air__text">Мы на связи</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>