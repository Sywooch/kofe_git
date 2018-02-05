<section class="brands">
    <div class="container">
        <div clas="col-md-12">
            <div class="brand-list brand-list-text">
                <?php foreach ($brands as $brand): ?>
                    <a href="/<?= $brand['url']; ?>">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <span><img src="/uploads/images/<?= $brand['image']; ?>" alt="<?= $brand['title']; ?>"/></span>
                            <div class="border-coner right"></div>
                        </div>
                    </a>                
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>