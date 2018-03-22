<div class="main-links">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 mb">
                <div class="lg-pr">
                    <div class="main-links--title"><span>Диагностируем кофемашины</span></div>
                    <div class="richtext main-links--text">
                        <p>Проведение диагностики кофемашин и устранение любых неисправностей. <br> Быстро, Качественно, Надёжно!</p>
                        <p><a class="button-secondary" href="/prices">Перейти ко всем неисправностям</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-8">
                <div class="main-links--grid row nogutter">
                    <?php foreach ($services as $service): ?>
                        <div class="col-xs-6 col-sm-4">
                            <a href="/<?= $service['url']; ?>" class="main-links--item" data-ga-type="<?= $service['title']; ?>" data-ga-event="<?= $service['title']; ?>">
                                <span class="main-links--item-label">
                                    <i class="main-links--item-icon i1"></i>
                                    <?= $service['title']; ?>
                                    <span>от <?= number_format($service['price'], 0, ' ', ' '); ?>₽</span>
                                </span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>