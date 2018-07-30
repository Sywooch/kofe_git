<div class="page-price__list">
    <div class="container">
        <div class="row">
            <?php foreach ($rows as $row): ?>
                <div class="page-price__item">
                    <div class="page-price__text col-sm-15">
                        <a href="/<?= $row['url']; ?>">
                            <div class="page-price__title">
                                <?= $row['title']; ?>
                            </div>
                        </a>
                        <div class="page-price__description">
                            <?= $row['description']; ?>
                        </div>
                    </div>
                    <div class="service-price__list-block col-sm-9">
                        <div class="service-price__list white">
                            <div class="service-price__title">
                                Возможные решения
                            </div>
                            <div class="faults-price__item">
                                <?= $row['text']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>