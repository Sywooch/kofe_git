<div class="photo" id="photo">
    <div class="container">
        <div class="photo__title-wrap">
            <h2 class="photo__title">Бренды, которые мы обслуживаем</h2>
        </div>
        <div class="brend">
            <?php foreach ($rows as $row): ?>
                <div class="item">
                    <img src="/uploads/images/<?= $row['image']; ?>" alt="" role="presentation"/>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>