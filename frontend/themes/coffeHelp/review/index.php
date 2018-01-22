<div class="bg otzivi">
    <div class="container theme-showcase" role="main">        
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="/">Ремонт кофемашин</a></li>
                    <li>Отзывы</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <h1 class="layout__title">Отзывы</h1>
            <div class="row my-review">
                <?php foreach ($rows as $row): ?>
                    <div class="reviews__box">
                        <p class="reviews__name"><?= $row['username']; ?> - <?= date('d.m.Y', strtotime($row['date'])); ?></p>
                        <div class="reviews__rating reviews__rating_<?= $row['rating']; ?>"></div>
                        <p class="reviews__text"><?= $row['message']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <?=
            \yii\widgets\LinkPager::widget([
                'pagination' => $pagination,
            ]);
            ?>
        </div>
    </div>
</div>
<div class="my-footer-block">
    <div class="container theme-showcase" role="main">
        <hr class="big_line">
        <section class="about">
            <div class="row">
                <?= $pageInfo['full_description']; ?>
            </div>
        </section>
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
        </section>
    </div>
</div>
