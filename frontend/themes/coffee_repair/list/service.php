<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<?= coffee_repair\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="service-information js-modal-block">
    <div class="page-wrap">
        <div class="right-block js-sticky-block">
            <div class="right-block__price-this-service">
                <p>Обслуживание <span>рожковых кофемашин</span></p>
                <ul>
                    <li>Бесплатный выезд мастера</li>
                    <li>Бесплатная диагностика</li>
                    <li>Бесплатная доставка в сервис</li>
                    <li>Гарантия до 3-х лет</li>
                </ul>
            </div>
            <hr>
            <div class="right-block__address">
                <p class="right-block__address-name">Компания "КофеРемонт"</p>
                <p class="right-block__address-mail">info@KofeRemont.ru</p>
                <address>г. Москва, Октябрьская улица, дом 9/1</address>
            </div>
            <hr>
            <div class="right-block__contacts-order">
                <span class="right-block__contacts-order-title">Круглосуточный прием заявок</span>
                <span class="right-block__contacts-order-phone">+7 (495) 215-52-37</span>
                <form class="ajax_form" action="" method="post">
                    <input class="js-validate-phone" type="text" placeholder="Номер телефона" name="phone">
                    <button type="submit" class="btn" data-style="success">Вызвать мастера на дом</button>
                    <input type="hidden" name="af_action" value="fe2dc23c46b60d87b7467852b2ee08eb" />
                </form>
            </div>
        </div>
        <div class="left-block left-block__sticky">
            <div class="service-infoblock clearfix">
                <h1><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                <img src="/<?= $siteConfig['theme'] . '/'; ?>images/uslugi/op-professionalnye-kofemashiny.jpg" />
                <div class="service-infoblock__right">
                    <?php if (!empty($pageInfo['description'])): ?>
                        <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $pageInfo['description']); ?>
                    <?php endif; ?>
                    <button class="js-modal btn-transparent" data-anchor="js-discount-order">Хочу скидку</button>
                </div>
            </div>
            <span class="span-title-pered-spiskom">Ремонт в сервисном центре "CoffeeRepair"</span>
            <?php if (!empty($pageInfo['full_description'])): ?>
                <?= $pageInfo['full_description']; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="modals">
        <div class="overlay"></div>
        <div class="modal order-form js-discount-order">
            <form class="ajax_form" action="" method="post">
                <p>Скидка <span class="first-discount">3%</span> на услугу при первичном обращении.</p>
                <p>Постоянная скидка <span class="regular-discount">5%</span> на плановую чистку и промывку механизмов подачи кофе</p>
                <hr/>
                <p>Скидка закрепляется за номером телефона клиента</p>
                <input type="text" placeholder="Ваше имя" name="name" autocomplete="off">
                <input class="js-validate-phone" type="text" placeholder="Номер телефона" name="phone">
                <button class="btn" type="submit">Получить скидку</button>
                <input type="hidden" name="af_action" value="3ec61b39cedf223da6193e2b4e283e7e" />
            </form>
        </div>
    </div>
</div>
<div class="feedback-order" id="konsult">
    <div class="page-wrap">
        <img src="/<?= $siteConfig['theme'] . '/'; ?>images/service-engineer.png" alt="Консультация сервисного инженера по ремонту кофемашин, кофейных аппаратов и кофеварок">
        <form class="ajax_form" action="" method="post">
            <textarea name="name" cols="30" rows="10" placeholder="Задать вопрос сервис-инженеру рожковых кофемашин"></textarea>
            <input type="text" name="phone" class="js-validate-phone" placeholder="Введите номер телефона для связи">
            <button type="submit" class="btn">Спросить у инженера</button>
            <input type="hidden" name="af_action" value="c6ece0824cb54e4626510d198e8d747e" />
        </form>
    </div>
</div>
<?= coffee_repair\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => 1, 'view' => 'services']); ?>
<?= coffee_repair\widgets\lists\LastReviews::widget(); ?>
<?= coffee_repair\widgets\forms\Order::widget(); ?>
<?= coffee_repair\widgets\other\Ht::widget(['view' => 'steps']); ?>