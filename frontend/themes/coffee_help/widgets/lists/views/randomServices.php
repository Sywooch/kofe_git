<div class="subheading">Возможно у вас что-то другое?</div>
<ul class="list" style="list-style-type: none; padding: 0; margin: 15px 0 0 0;">
    <?php foreach ($rows as $key => $row): ?>
        <li class="works">
            <a href="/<?= $row['url']; ?>" style="color:#333;">
                <img src="/uploads/images/services/<?= $row['image']; ?>" alt="<?= $row['title']; ?>" style="border-radius: 3px; margin-bottom: 5px">
                <br>
                <span style="border-bottom: dashed 1px #333;"><?= $row['title']; ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>