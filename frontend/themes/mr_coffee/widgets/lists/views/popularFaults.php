<section class="services">
    <div class="row">
        <div class="col-12">
            <h2 class="mt10">Устраняем неисправности кофемашин</h2>
            <ul class="services__items">
                <?php foreach ($rows as $row): ?>
                    <li class="services__item">
                        <a class="services__href" href="/<?= $row['url']; ?>">
                            <span class="services__text"><?= $row['title']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="services__item"><a class="services__href" href="/prices"><span class="services__text">Остальные неисправности</span></a></li>
            </ul>
        </div>
    </div>
</section>