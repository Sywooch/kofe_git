<div class="<?= $all ? 'all-brands' : 'brendi'; ?>">
    <div class="container">
        <ul class="<?= $all ? 'all-brands' : 'owl-carousel brend-c owl-theme'; ?>">
            <?php foreach ($brands as $k => $brand): ?>
                <li class="item">
                	<a href="/<?= $brand['url']; ?>">
                		<img src="/uploads/images/<?= $all ?  $brand['image'] : str_replace('.png', '.svg', $brand['image']); ?>">
                	</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>