<div>
    <?php foreach ($specs as $gr => $features): ?>
        <h2><?= $gr; ?></h2>
        <?php foreach ($features as $feature): ?>
            <dl>
                <dt>
                    <span><?= $feature['spec_name']; ?></span>
                </dt>
                <dd>
                    <span><?= $feature['spec_value']; ?></span>
                </dd>
            </dl>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>