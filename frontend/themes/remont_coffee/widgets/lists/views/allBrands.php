<div class="<?= $all ? 'all-brands' : 'brendi'; ?>">
    <div class="kantener">
        <ul class="<?= $all ? 'all-brands' : 'owl-carousel Brend-c owl-theme'; ?>">
            <?php foreach ($brands as $k => $brand): ?>
                <li class="jisim">
                	<a href="/<?= $brand['url']; ?>">
                		<img src="/uploads/images/<?= $all ?  $brand['image'] : str_replace('.png', '.svg', $brand['image']); ?>">
                	</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>