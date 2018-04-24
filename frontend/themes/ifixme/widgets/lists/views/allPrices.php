<section id="number-10">
    <div class="container">
        <div class="title">Сколько стоит?</div>
        <?php $services = frontend\models\Pages::getModelServices($parent['id']); ?>
        <div id="tabs-1" class="tab-content active">
            <table>
                <tr class="head">
                    <th>Тип ремонта</th>
                    <th>Стоимость</th> 
                    <th>Время на ремонт</th>
                </tr>
                <?php foreach ($services as $service): ?>
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