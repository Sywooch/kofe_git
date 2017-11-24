<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="bl-faults" style="float: left; margin-top: 0;">
    <div class="list">
        <ul style="border-top: none;">
            <?php foreach ($rows as $key => $row): ?>
                <li>    
                    <div class="name">
                        <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title']; ?></a>
                    </div>
                    <div class="description hidden-sm hidden-xs"><?= $row['description']; ?></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>