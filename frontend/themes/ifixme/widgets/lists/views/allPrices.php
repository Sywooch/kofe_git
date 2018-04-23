<section id="number-10">
    <div class="container">
        <div class="title">Сколько стоит?</div>
        <div id="bottons-tablet" class="bottons frame">
            <div class="clearfix">
                <?php $k = 0; ?>
                <?php foreach ($models as $key => $model): ?>
                    <?php if ($model['icon'] == 1 || 1 == 1): ?>            
                        <a onclick="return false;" href="#" data-tab="tabs-<?= $model['id']; ?>"<?= $k == 0 ? ' class="active"' : '' ?>><?= str_replace($parent['title'] . ' ', '', $model['title']); ?></a>
                        <?php $k++; ?>
                    <?php endif; ?>
                <?php endforeach; ?>                
            </div>
        </div>
        <?php $k = 0; ?>
        <?php foreach ($models as $key => $model): ?>
            <?php if ($model['icon'] == 1 || 1 == 1): ?>
                <?php $services = frontend\models\Pages::getModelServices($parent['id']); ?>
                <div id="tabs-<?= $model['id']; ?>" class="tab-content<?= $k == 0 ? ' active' : '' ?>">
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
                <?php $k++; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>