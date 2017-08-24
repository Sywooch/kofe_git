<div class="left-menu">
    <ul>
        <?php
        $html = '';
        foreach ($rows as $row) {
            if ($row['type'] == 2)
                echo '<li' . ($id == $row['id'] ? ' class="active"' : '') . '><a href="/' . (!empty ($prefUrl) ? $prefUrl . '/' : '') . $row['url'] . '">' . $row['title'] . '</a></li>';
            else {
                $html .= '<a class="link" href="/' . (!empty ($prefUrl) ? $prefUrl . '/' : '') . $row['url'] . '">' . $row['title'] . '</a>';
            }
        }
        ?>         
    </ul>
    <?php if (!empty($html)): ?>
        <div class="other">
           <?= $html; ?>
        </div>
    <?php endif; ?>
</div>