<?php
$breadcrumbs = [
    $pageInfo['title'],
];
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">
                <h1>Контактная информация</h1>
            </div>

            <p>Мы, сервисный центр по ремонту кофемашин &laquo;РемонтКофе&raquo; - команда профессионалов, которые знают все о кофемашинах от А до Я. Наши мастера работают как на выезде, так и в сервисном центре, осуществляя ремонт кофемашин любой сложности.</p>

            <div class="clear">&nbsp;</div>
            <div class="msk-contact all-contact<?= Yii::$app->session['region']['id'] == 1 ? ' active' : ''; ?>">
                <h2>Наш адрес в <div class="will-active-m"></div><span class="v-msk active">Москве</span> <span class="v-spb">Санкт-Петербурге</span></h2>
                <p>
                    Почта: <a href="mailto:zakaz@remontkofe.ru">zakaz@remontkofe.ru</a><br />
                    Номер телефона: <span class="moskva">8 (499)450-90-08</span><br />
                    Работаем без выходных с 08:00 до 22:00<br />
                    Центральный офис:&nbsp;м. Фили, ул. Большая филевская 3
                </p>
                <div class="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A491aa95e1bc192d0a1b6997ca799239d6ddde59426eb4d6d87042832d6436424&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
                <?php if (!empty($children) && 3 == 1): ?>
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
            </div>
            <div class="spb-contact all-contact<?= Yii::$app->session['region']['id'] == 2 ? ' active' : ''; ?>">
                <h2>Наш адрес в <div class="will-active-m"></div><span class="v-spb active">Санкт-Петербурге</span> <span class="v-msk">Москве</span> </h2>
                <p>
                    Почта: <a href="mailto:zakaz@remontkofe.ru">zakaz@remontkofe.ru</a><br />
                    Номер телефона: <span class="spb">8 (812) 643-21-07</span><br />
                    Работаем без выходных с 08:00 до 22:00<br />
                    Центральный офис:&nbsp;м. Спасская, м. Садовая, м. Сенная площадь, ул Ефимова 3, литер Ц, ТЦ "Сенная", этаж 1
                </p>
                <div class="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af03708bac94493b6101189bc839b8e55e16e7ef23a0998c0239102f58cfcfe09&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
                <?php if (!empty($children) && 3 == 1): ?>
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
            </div>
        </div>
    </div>

    <div class="clear">&nbsp;</div>
</section>








<section id="ask">
    <div class="container">
        <div>
            <h3>Заказать звонок</h3>
            <p>Закажите бесплатную консультацию.</p>
            <?= \app\widgets\forms\CallBack::widget(); ?>
        </div>
    </div>
</section>