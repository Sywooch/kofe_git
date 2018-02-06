<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : $model['title'];
?>
<header class="header header__about">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-11 col-sm-14">
                    <h1 class="title title__1 light"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
                </div>
                <div class="col-lg-12 col-md-11 col-sm-10 col-md-offset-2">
                    <div class="hero_why-we">
                        <?= $model['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="solutions">
    <?= professionals\widgets\forms\Today::widget(['sectionClass' => 'you-get__dark']); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <?= professionals\widgets\other\YouGet::widget(); ?>
            </div>
        </div>
    </div>
</section>
<section class="seo-text">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 style="text-align: justify;">Какие поломки можно устранить в нашем сервисном центре</h2><div style="text-align: justify;">В случае, если ваша кофемашина всё-таки вышла из строя, то не стоит искать причины поломки самостоятельно. Вы можете нанести еще больший вред вашему любимому устройству, чем серьезно усложните работу профессионалам. Лучшим вариантом, будет обратиться в наш сервисный центр. Мы способны справиться со следующими неисправностями:&nbsp;</div><ul><li style="text-align: justify;">не включается или не запускается нужная программа;</li><li style="text-align: justify;">протекание;</li><li style="text-align: justify;">не мелет кофейные зерна;</li><li style="text-align: justify;">проблемы с работой капучинатора;</li><li style="text-align: justify;">проблемы с подачей кофе;</li><li style="text-align: justify;">не нагревается до необходимой температуры.</li></ul><p style="text-align: justify;">Оформите заявку на бесплатное бронирование, позвоните и перечислите менеджеру неисправности вашей кофемашины, который передаст всю информацию мастеру. Специалист нашего сервисного центра бесплатно диагностирует и за обговоренную сумму отремонтирует машину, имеющую поломку любой сложности.</p><h3 style="text-align: justify;">Виды выполняемых работ</h3><div style="text-align: justify;">После проведения диагностических работ, специалисты предлагают одну из следующих услуг:</div><ul><li style="text-align: justify;">Мелкий ремонт - представляет из себя замену шлангов, уплотнителей, прокладок, патрубков, штуцеров и предполагает частичный разбор кофейного оборудования.</li><li style="text-align: justify;">Капитальный ремонт - подразумевает починку или замену блоков заваривания, нагрева, парообразования и платы управления и связан с полным разбором кофеварочного механизма.</li><li style="text-align: justify;">Ремонт с целью профилактики с заменой ножей в кофемольном отсеке и замене помпы не предполагающий разбора.</li><li style="text-align: justify;">Сервисное обслуживание - проведение очистки от накипи, масел, наладка программного обеспечения машины.</li></ul><h3 style="text-align: justify;">Стоимость наших услуг в Москве</h3><div style="text-align: justify;">Обращаясь в наш сервисный центр, клиент получает качественный ремонт по оптимальным ценам и в сжатые&nbsp;сроки. Мы предлагаем выгодные скидки для постоянных клиентов и тем, кто обратился к нам впервые.&nbsp;</div><div style="text-align: justify;">&nbsp;</div><div style="text-align: justify;">Существуют четыре фактора, из которых складывается сумма за ремонт кофемашины. Это - вид и модель агрегата, сложность / легкость поломки, цена на запасные комплектующие и срочность заказа.</div><div style="text-align: justify;">&nbsp;</div><div style="text-align: justify;">Обращайтесь в наш сервисный центр, и ваша кофемашина будет вам благодарна, так как уже завтра она будет отлично работать и располагаться на своем привычном месте!</div>
            </div>
        </div>
    </div>
</section>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Популярные услуги', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>