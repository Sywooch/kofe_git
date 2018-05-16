<div class="models-list">
    <?php foreach ($sortedBrands as $latter => $models): ?>
        <div class="models-list__row row">
            <div class="col-md-1">
                <div class="h3 models-list__letter"><?= $latter; ?></div>
            </div>
            <div class="col-md-11 models-list__items">
                <?php foreach ($models as $model): ?>
                    <a class="models-list__item text-dark" href="/<?= $model['url']; ?>"><?= str_replace('/', ' / ', $model['title']); ?></a> 
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div><br>