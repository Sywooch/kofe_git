<div class="top-models">
    <div class="container">
        <p class="gl-text">Популярные <span>модели</span></p>
        <div class="owl-carousel model-c owl-theme">
            <?php foreach ($rows as $row): ?>
                <div class="item">
                    <div class="img"><img src="/uploads/images/<?= $row['image']; ?>" alt=""></div>
                    <div class="name"><?= $row['brand_title'] . ' ' . $row['title']; ?></div>                
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>