<div class="models">
    <div class="container">
        <h3>Ремонтируем модели <?= app\components\CController::$monoBrand['title']; ?>:</h3>
        <div class="models__wrapper no-gutters row">
            <?php foreach ($rows as $row): ?>
                <div class="col-md-3">
                    <a class="models__item" href="/<?= $row['url']; ?>">
                        <img alt="<?= $row['brand_title'] . ' ' . $row['title']; ?>" class="models__item-img" src="/uploads/images/<?= $row['image']; ?>" /> 
                        <div class="models__item-name"><?= $row['brand_title'] . ' ' . $row['title']; ?></div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="models__more text-center">
            <a class="btn btn-outline-primary" href="/models">Показать все <span class="d-md-inline d-none">ремонтируемые</span> модели</a>
        </div>
    </div>
</div>