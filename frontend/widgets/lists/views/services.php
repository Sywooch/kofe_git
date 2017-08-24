<ul>
    <?php foreach ($rows as $row): ?>
        <li><a href="/<?php echo $row['url']; ?>"><?php echo $row['title']; ?></a></li>
    <?php endforeach; ?>
</ul>