<div class="bl-contact faults" style="width: 100%;">
    <?php foreach ($services as $group => $service): ?>
    <div class="heading"><?= $group . (!empty($prefix) ? ' ' . $prefix : ''); ?> </div>
        <ul class="spisok">
            <li>
                <ul>
                    <?php foreach ($service as $child): ?>
                        <li><?= $child['title']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    <?php endforeach; ?>
</div>