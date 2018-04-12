<div class="main-calc">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 mb166">
                <div class="lg-pr2">
                    <div class="main-calc--title"><span class="">Предоставляем услуги!</span></div>
                    <div class="main-calc--text"><span class="">Инженеры сервисного центра предоставляют следующие услуги по максимально низкой цене. Благодаря прямой поставки комплектующих от производителя, все услуги отпускаются без наценки!</span></div>
                    <?= tnv\widgets\forms\ServiceForm::widget(); ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-8 visible-md visible-lg">
                <div class="row">
                    <div class="col-xs-8 col-lg-9">
                        <div class="main-calc--stitle">Популярные услуги в ремонте кофемашин</div>
                    </div>
                    <div class="col-xs-4 col-lg-3"><a href="/prices" class="btn btn-primary btn-lg btn-block">Все услуги</a></div>
                </div>
                <div class="row">
                    <?php foreach ($rows as $key => $row): ?>
                        <div class="col-xs-12 col-lg-6">
                            <div class="package-item mini">
                                <div class="package-item--head clearfix">
                                    <div class="package-item--info float--left">
                                        <div class="package-item--title"><a href="/<?= $row['url']; ?>"><?= $row['title']; ?></a></div>
                                    </div>
                                    <div class="package-item--counter counter float--right mini">
                                        <div class="counter--digits">
                                            <span>от <?= number_format($row['price'], 0, ' ', ' '); ?></span>
                                            <div class="counter--label">руб</div>
                                        </div>
                                        <div class="btnmy" data-toggle="modal" data-target="#online-zayavkamy">Заказать</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="main-calc--hr visible-md visible-lg"></div>
    </div>
</div>