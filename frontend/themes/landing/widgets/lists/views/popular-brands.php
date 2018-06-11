<div class="photo" id="photo">
    <div class="container">
        <div class="photo__title-wrap">
            <h2 class="photo__title">Бренды, которые мы обслуживаем</h2>
        </div>
        <div class="brend">
            <?php foreach ($rows as $row): ?>
                <a href="javascript:;" data-id="<?= $row['id']; ?>" data-fancybox="modal6" data-src="#newModal" class="item">
                    <div><img src="/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>" role="presentation"/></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>