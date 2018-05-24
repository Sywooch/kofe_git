<?php $prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : ''; ?>
<section class="collection-menu">
    <ul class="collection-menu-items">
        <li class="collection-menu-item collection-menu-item--active">
            <a href="#" class="active"><?= $t1; ?></a>
            <ul class="collection-menu-subcollection">
                <?php foreach ($rows as $row): ?>
                    <li class="collection-menu-subcollection-item">
                        <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title']; ?></a>
                    </li>
                <?php endforeach; ?>                
            </ul>
        </li>
    </ul>
</section>