<?php $prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : ''; ?>
<section class="collection-menu">
    <ul class="collection-menu-items">
        <li class="collection-menu-item collection-menu-item--active">
            <a href="#" class="active"><?= $t1; ?></a>
            <ul class="collection-menu-subcollection">
                <?php foreach ($rows as $row): ?>
                    <?php
                    $url = '#';
                    if ($_GET['data']['type'] != 'model')
                        $url = '/' . (!empty($prefUrl) ? $prefUrl . '/' : '') . $row['url'];
                    ?>
                    <li class="collection-menu-subcollection-item">
                        <a href="<?= $url; ?>"><?= $row['title']; ?></a>
                    </li>
                <?php endforeach; ?>                
            </ul>
        </li>
    </ul>
</section>