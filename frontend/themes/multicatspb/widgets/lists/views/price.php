<section id="number-12">
    <div class="container">
        <div class="title">Сколько стоит ремонт <?= $model['title']; ?>?</div>
        <div class="head">
            <p>Популярные услуги</p>
            <p>Стоимость</p>
            <p>Время на ремонт</p>
        </div>        
        <div class="item active">            
            <table>
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