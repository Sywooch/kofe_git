<div class="brendi">
    <div class="container">
        <ul class="owl-carousel brend-c owl-theme">
            <?php foreach ($brands as $k => $brand): ?>
                <li class="item"><a href="/<?= $brand['url']; ?>"><img src="/uploads/images/<?= str_replace('.png', '.svg', $brand['image']); ?>" alt=""></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>