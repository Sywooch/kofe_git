<dl class="services">
    <dt class="services__title">
        <i class="fa fa-bars"></i>Наши услуги
    </dt>
    <dd class="services__content">
        <div class="services__content__in">
            <?php foreach ($rows as $key => $row): ?>
                <h3><?php echo $row['title']; ?></h3>
                <div class="links__list three-col<?php echo $key == $cnt ? ' indent-bt-none' : ''; ?>">
                    <ul>
                        <?php foreach ($row['catChilds'] as $child): ?>
                            <li>
                                <i class="fa <?php echo $child['icon']; ?>"></i>
                                <span>
                                    <a href="/<?php echo $child['url']; ?>"><?php echo $child['title']; ?></a>
                                </span>    
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>   
            <?php endforeach; ?>
        </div>
    </dd>
</dl>