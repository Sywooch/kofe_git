<?php foreach ($rows as $row): ?>
    <div class="col-md-3 col-sm-4 modelitem_wrap">
        <div>
            <a href="/<?= $row['url']; ?>">
                <img class="modelin_img" src="/uploads/images/<?= $row['image']; ?>" alt="Ремонт <?= $brand . ' ' . $row['title']; ?>">
                     <span class="modelin_name"><?= $brand . ' ' . $row['title']; ?></span>
            </a>
        </div>
    </div>
<?php endforeach; ?>