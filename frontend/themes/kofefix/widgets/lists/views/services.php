<div class="faults__price faults__price--padding">
    <div class="container">
        <div class="row">
            <div class="faults-price__title col-lg-6 col-sm-7">
                Прайс-лист
            </div>
            <div class="faults-price__content">
                <?php foreach ($services as $key => $service): ?>
                    <?php if (($key % 3) === 0): ?><div class="faults-price__item col-lg-8 col-sm-8"><?php endif; ?>
                        <a href="/<?= $service['url']; ?>" class="faults-price__row">
                            <span class="faults-price__name">
                                <?= $service['title']; ?>
                            </span>
                            <span class="faults-price__cost">
                                <span class="price-nowrap"><i>от</i> <span><?= round($service['price']); ?></span> <i class="fa fa-rub" aria-hidden="true"></i> </span>
                            </span>
                        </a>
                        <?php if (($key % 3) === 2 || ($key + 1) == count($services)): ?></div><?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>