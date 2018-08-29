<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="section-margin">
    <div class="row">
        <div class="col-12">
            <h3 class="mt0 mb0"><?= !empty($title) ? $title : 'Цены на ремонт' ?></h3>
        </div>
        <div class="view-more view-more--table-info">
            <div class="view-more__content view-more__content--table-info">
                <table class="table-info mt5">
                    <thead>
                        <tr>
                            <th>Поломка</th>
                            <th>Время&nbsp;ремонта</th>
                            <th>Стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $key => $row): ?>
                            <tr class="table-info__item">
                                <td class="table-info__cell table-info__cell--service"><?= $row['is_popular'] == 1 ? '<a href="/' . $row['url'] . '">' . $row['title'] . '</a>' : $row['title']; ?></td>
                                <td class="table-info__cell table-info__cell--time"><?= $row['time']; ?></td>
                                <td class="table-info__cell table-info__cell--price text-blue">от <?= number_format($row['price'], 0, ' ', ' '); ?> р</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12"><a class="mb0 view-more__link" href="#">Открыть еще</a></div>
        </div>
        <div class="col-12">
            <p>В стоимость ремонта не входит цена детали. <a href="/price">Все цены на ремонт</a></p>
            <p>Если цена на ремонт стиральной машины Вас не устроит, Вы оплачиваете только диагностику. В случае согласия на ремонт диагностика проводится бесплатно. Кроме того, мы не берём оплату за вызов мастера. При этом в большинстве случаев мы выполняем ремонт стиральных машин на дому, что экономит ещё и Ваше время.</p>
        </div>
    </div>
</div>