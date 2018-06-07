<div class="photo" id="photo">
    <div class="container">
        <div class="photo__title-wrap">
            <h2 class="photo__title">Бренды, которые мы обслуживаем</h2>
        </div>
        <div class="brend">
            <?php foreach ($rows as $row): ?>
                <div class="item">
                    <div><img src="/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>" role="presentation"/></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>