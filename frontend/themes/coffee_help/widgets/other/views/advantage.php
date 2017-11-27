<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="cost">
    <div class="cost__inner">
        <h2 class="cost__title">Шаги вашего ремонта</h2>
        <ul class="cost__list">
            <li class="cost__item">
                <div class="cost__number">1</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_1.png" alt="">
                </div>
                <h3 class="cost__label">Заявка</h3>
                <p class="cost__text">Оформите заявку по телефону <a href='tel:+74952284282'>8(495)228-42-82</a> или на сайте. </p>
            </li>
            <li class="cost__item">
                <div class="cost__number">2</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_2.png" alt="">
                </div>
                <h3 class="cost__label">Номер заявки</h3>
                <p class="cost__text">Вашему заказу присваивается уникальный номер, по которому вы можете отследить его в личном кабинете. </p>
            </li>
            <li class="cost__item">
                <div class="cost__number">3</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_3.png" alt="">
                </div>
                <h3 class="cost__label">Выезд мастера</h3>
                <p class="cost__text">Перед выездом мастер обязательно свяжется с вами, чтобы согласовать время визита и уточнить характер поломки.</p>
            </li>
            <li class="cost__item">
                <div class="cost__number">4</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_4.png" alt="">
                </div>
                <h3 class="cost__label">Диагностика</h3>
                <p class="cost__text">Мастер проводит диагностику и после нее называет стоимость ремонта и срок выполнения.</p>
            </li>
            <li class="cost__item">
                <div class="cost__number">5</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_5.png" alt="">
                </div>
                <h3 class="cost__label">Ремонт</h3>
                <p class="cost__text">После вашего согласия мастер производит ремонт прямо у вас дома.</p>
            </li>
            </li>
            <li class="cost__item">
                <div class="cost__number">6</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_6.png" alt="">
                </div>
                <h3 class="cost__label">Контроль качества</h3>
                <p class="cost__text">В течение 3-х дней после ремонта наша служба контроля качества свяжется с вами по поводу качества работы мастера.</p>
            </li>
        </ul>
    </div>
</section>