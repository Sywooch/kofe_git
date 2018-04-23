<?php 
$this->title = $pageInfo['meta_title'];
$breadcrumbs = [
    $pageInfo['title'],
];
?>
<?= ifixme\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-26">
    <div class="container">
        <h1><?= $pageInfo['meta_h1']; ?></h1>
        <?php foreach (app\components\CController::$menu as $key => $category): ?>
            <div class="content-services<?= $key == 0 ? ' active' : '' ?>">
                <div class="open-botton">
                    <p>Услуги <?= str_replace('Ремонт ', '', $category['title']); ?></p>
                </div>
                <?php $services = frontend\models\Pages::getCategoryServices($category['id']); ?>
                <table class="my-table">
                    <tbody>
                        <?php foreach ($services as $service): ?>
                            <tr>
                                <td>
                                    <?php if ($service['is_popular'] == 1 && 2 == 1): ?>
                                        <a href="/<?= $category['url'] . '-' . $service['url']; ?>"><?= $service['title']; ?></a>
                                    <?php else: ?>
                                        <?= $service['title']; ?>
                                    <?php endif; ?>
                                </td>
                                <td><span><?= number_format((!empty($service['model_price']) ? $service['model_price'] : $service['price']), 0, ' ', ' '); ?> р</span><a class="btn out-icon open-popup" data-tab="popup2" onclick="return false;" href="#">Заказать</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endforeach; ?>
    </div>
</section>