<section id="number-10">
    <div class="container">
        <div class="title">Сколько стоит?</div>
        <div id="bottons-tablet" class="bottons frame">
            <div class="clearfix">
                <?php if (!empty($services)): ?><a onclick="return false;" href="#" data-tab="tabs-1" class="active">Популярные услуги</a><?php endif; ?>
                <a onclick="return false;" href="#" data-tab="tabs-2"<?= empty($services) ? ' class="active"' : ''; ?>>Остальные услуги</a>
            </div>
        </div>
        <?php if (!empty($services)): ?>
            <div id="tabs-1" class="tab-content active">
                <table>
                    <tr class="head">
                        <th>Тип ремонта</th>
                        <th>Стоимость</th>
                        <th>Время на ремонт</th>
                    </tr>
                    <?php foreach ($services as $service): ?>
                        <tr>
                            <td><a href="/<?= $parent['url'] . '/' . $service['url']; ?>"><?= $service['title']; ?></a> <?= !empty($service['description']) ? '<span>' . $service['description'] . '</span>' : ''; ?></td>
                            <td><?= number_format((!empty($service['model_price']) ? $service['model_price'] : $service['price']), 0, ' ', ' '); ?> руб.</td> 
                            <td>
                                <time><?= $service['time']; ?></time>
                                <a class="btn green out-icon open-popup" data-tab="popup2" onclick="return false;" href="#">ЗАКАЗАТЬ СЕЙЧАС</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>
        <div id="tabs-2" class="tab-content<?= empty($services) ? ' active' : ''; ?>">
            <table>
                <tr class="head">
                    <th>Тип ремонта</th>
                    <th>Стоимость</th>
                    <th>Время на ремонт</th>
                </tr>
                <?php foreach ($otherServices as $service): ?>
                    <tr>
                        <td><?= $service['title']; ?> <?= !empty($service['description']) ? '<span>' . $service['description'] . '</span>' : ''; ?></td>
                        <td><?= number_format((!empty($service['model_price']) ? $service['model_price'] : $service['price']), 0, ' ', ' '); ?> руб.</td> 
                        <td>
                            <time><?= $service['time']; ?></time>
                            <a class="btn green out-icon open-popup" data-tab="popup2" onclick="return false;" href="#">ЗАКАЗАТЬ СЕЙЧАС</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>