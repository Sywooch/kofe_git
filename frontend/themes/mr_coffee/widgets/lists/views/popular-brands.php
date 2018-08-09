<section class="panel panel--list-image mb40">
    <h4 class="panel__caption">Мы специализируемся на&nbsp;ремонте</h4>
    <ul class="list-image reset-list">
        <?php foreach ($rows as $row): ?>
            <li class="list-image__item">
                <a href="/<?= $row['url']; ?>" class="link--reset">
                    <img src="/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>