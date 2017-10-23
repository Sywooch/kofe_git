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

            <?= !empty($pageInfo['description']) ? $pageInfo['description'] : '<p>Мы, сервисный центр по ремонту кофемашин &laquo;РемонтКофе&raquo; - команда профессионалов, которые знают все о кофемашинах от А до Я. Наши мастера работают как на выезде, так и в сервисном центре, осуществляя ремонт кофемашин любой сложности.</p>' ?>

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
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aff5f5860252f4cb5593d5da22cd0aa71e65ebf9ee9a6f2d34ebffc20ca3d411c&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            <?php elseif (isset($siteConfig['spb'])): ?>
                <div class="msk-contact all-contact active">
                    <h2>Наш адрес в Санкт-Петербурге</h2>
                    <p>                        
                        Номер телефона: <span class="moskva"><?= Yii::$app->session['region']['phone']; ?></span><br />
                        Работаем без выходных с 08:00 до 22:00<br />
                        Центральный офис: м. Сенная площадь, м. Спасская, ул Ефимова 2, ТЦ ПИК, этаж 1, павильон 100
                    </p>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aef863b008884b6b061a3182be8f2ee3235ee72e0176c43a2c9681fa7d00a56c5&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($siteConfig['spb-multi']) && !$siteConfig['mono']): ?>                
                <div class="spb-contact all-contact active">
                    <h2>Наш адрес в Санкт-Петербурге</h2>
                    <p>                        
                        Номер телефона: <span class="spb"><?= $siteConfig['phone-2']; ?></span><br />
                        Работаем без выходных с 08:00 до 22:00<br />
                        Центральный офис: м. Садовая, Московский проспект 2/6, подъезд 6, этаж 3
                    </p>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A02bc0b2650178a379cf8906d1dfb2db1b82cbeb05854924c3f4516592b4e158f&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
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
            <?php if (isset($siteConfig['category_id']) && $siteConfig['category_id'] == 1): ?>                
                <div class="spb-contact all-contact active">
                    <h2><b>Наш адрес в Москве</b></h2>
                    <p>                        
                        Номер телефона: <span class="spb"><?= $siteConfig['phone-1']; ?></span><br />
                        Работаем без выходных с 08:00 до 22:00<br />
                        Центральный офис: м Фили, м. Шелепиха ул. Заречная 1к2, вход со двора
                    </p>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A80a5761082e8feb488ee844ffe181aed36c78bbb421ef3139be059a805401e2e&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>                    
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</section>
<?php if (!$siteConfig['mono']): ?>
    <section id="ask">
        <div class="container">
            <div>
                <h3>Закажите бесплатную консультацию.</h3>
                <p>Мы свяжемся с Вами в течение 5 минут.</p>
                <?= \app\widgets\forms\CallBack::widget(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>