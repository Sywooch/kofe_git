<?php
$breadcrumbs = [
    $pageInfo['title'],
];
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<?= $pageInfo['description']; ?>
<?= $pageInfo['full_description']; ?>
<section id="ask">
    <div class="container">
        <div>
            <h3>Заказать звонок</h3>
            <p>Закажите бесплатную консультацию.</p>
            <?= \app\widgets\forms\CallBack::widget(); ?>
        </div>
    </div>
</section>
<?php if (!empty($children)): ?>
    <section id="links">
        <div class="container">
            <p class="title"><span><?= $pageInfo['icon'] == 'rayon' ? 'Метро' : 'Районы' ?> </span></p>
        </div>
        <div class="container">
            <ul>
                <?php foreach ($children as $child): ?>
                    <li><a href="/<?= $child['url']; ?>"><?= $child['title']; ?></a></li>
                <?php endforeach; ?>
                <div class="clear"></div>
            </ul>
        </div>
    </section>
<?php endif; ?>