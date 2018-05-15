<div class="col-lg-3 d-lg-block d-none sidebar">
    <div class=sidebar-toggle>
        <div class="active sidebar-toggle__option" data-target=#faultsToggle> Неисправности </div>
        <div class=sidebar-toggle__option data-target=#servicesToggle> Услуги </div>
    </div>
    <div class="collapse show sidebar-collapse" id="faultsToggle">
        <?php
        $html = '';
        foreach ($rows as $row) {
            if ($row['type'] == 2)
                echo '<a class="sidebar-faults__item" href="/' . (!empty($prefUrl) ? $prefUrl . '/' : '') . $row['url'] . '">' . $row['title'] . '</a>';
            else {
                $html .= '<a class="sidebar-services__item" href="/' . (!empty($prefUrl) ? $prefUrl . '/' : '') . $row['url'] . '">' . $row['title'] . '</a>';
            }
        }
        ?>        
    </div>
    <?php if (!empty($html)): ?>
        <div class="collapse sidebar-collapse" id="servicesToggle">
            <?= $html; ?>
        </div>
    <?php endif; ?>
</div> 