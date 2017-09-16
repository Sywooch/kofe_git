<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">
                <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
            </div>

            <p>Мы, сервисный центр по ремонту кофемашин &laquo;РемонтКофе&raquo; - команда профессионалов, которые знают все о кофемашинах от А до Я. Наши мастера работают как на выезде, так и в сервисном центре, осуществляя ремонт кофемашин любой сложности.</p>

            <div class="clear">&nbsp;</div>
            <?php if ($siteConfig['mono'] && !isset($siteConfig['spb'])): ?>
                <div class="msk-contact all-contact active">
                    <h2>Наш адрес в Москве</h2>
                    <p>                        
                        Номер телефона: <span class="moskva"><?= Yii::$app->session['region']['phone']; ?></span><br />
                        Работаем без выходных с 08:00 до 22:00<br />
                        Центральный офис: м. Войковская, 4-й войковский проезд 6к2
                    </p>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A491aa95e1bc192d0a1b6997ca799239d6ddde59426eb4d6d87042832d6436424&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
                    </div>
                </div>
            <?php else: ?>
                <div class="msk-contact all-contact active">
                    <h2>Наш адрес в Санкт-Петербурге</h2>
                    <p>                        
                        Номер телефона: <span class="moskva"><?= Yii::$app->session['region']['phone']; ?></span><br />
                        Работаем без выходных с 08:00 до 22:00<br />
                        Центральный офис: м. Садовая, Московский проспект 2/6, подезд 6, этаж 3
                    </p>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A491aa95e1bc192d0a1b6997ca799239d6ddde59426eb4d6d87042832d6436424&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!isset($siteConfig['spb-multi']) && !$siteConfig['mono']): ?>
                <div class="msk-contact all-contact<?= Yii::$app->session['region']['id'] == 1 ? ' active' : ''; ?>">
                    <h2>Наш адрес в <div class="will-active-m"></div><span class="v-msk active">Москве</span> <span class="v-spb">Санкт-Петербурге</span></h2>
                    <p>
                        Почта: <a href="mailto:zakaz@remontkofe.ru">zakaz@remontkofe.ru</a><br />
                        Номер телефона: <span class="moskva">8 (499)450-90-08</span><br />
                        Работаем без выходных с 08:00 до 22:00<br />
                        Центральный офис:&nbsp;м Фили, м. Шелепиха ул. Заречная 1к2, вход со двора
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
                    <h2>Наш адрес в <div class="will-active-m"></div><span class="v-spb active">Санкт-Петербурге</span> <?php if (!isset($siteConfig['spb-multi']) && !$siteConfig['mono']): ?><span class="v-msk">Москве</span><?php endif; ?> </h2>
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
            <?php endif; ?>
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