<div class="top-models">
    <div class="kantener">
        <p class="G-tekst">Популярные <span>модели</span></p>
        <div class="Owl-carousel model-c owl-theme">
            <?php foreach ($rows as $row): ?>
                <div class="jisim">
                    <div class="img"><img src="/uploads/images/<?= $row['image']; ?>" alt=""></div>
                    <div class="imya"><?= $row['brand_title'] . ' ' . $row['title']; ?></div>                
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>