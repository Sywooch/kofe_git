<?php foreach ($rows as $row): ?>
    <div class="col-md-3 col-sm-4 col-xs-6 modelitem_wrap">
        <a href="/<?= $row['url']; ?>">
          <div class="modelin_img">
          	<img class="modelin_img" src="/uploads/images/<?= $row['image']; ?>" alt="Ремонт <?= $brand . ' ' . $row['title']; ?>">
          </div>
            <span class="modelin_name"><?= $brand . ' ' . str_replace('/', ' /', $row['title']); ?></span>
        </a>
    </div>
<?php endforeach; ?>