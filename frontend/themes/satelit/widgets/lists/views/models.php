<section class="models">
    <p class="section-title"><?= $limit == 0 ? 'Все' : 'Другие'; ?> модели <?= app\components\CController::$monoBrand['title']; ?></p>
    <div class="row">
        <?php foreach ($rows as $model): ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <a href="/<?= $model['url']; ?>" class="models-item">
                    <span class="models-item--thumb" style="background-image: url(/uploads/images/<?= $model['image']; ?>);"></span>
                    <p class="models-item--title"><?= $model['title']; ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>