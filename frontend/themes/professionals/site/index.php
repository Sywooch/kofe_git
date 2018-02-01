<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
?>
<header class="header<?= !$isHome ? ' header__faults' : ''; ?>">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-10 col-sm-11">
                    <div class="hero_order">
                        <h1 class="title title__1 light title__home"><?= $page['meta_h1']; ?></h1>
                        <div class="subtitle">В сервисном центре</div>
                        <ul class="hero_claim home">
                            <li>Бесплатный выезд курьера в течение <span>60 минут</span></li>
                            <li><span>Фирменные</span> запчасти</li>
                            <li>Гарантия <span>2 года</span></li>
                        </ul>
                        <button type="button" class="btn hero_btn btn__textlight" data-toggle="modal" data-target="#modalOrder">Заказать ремонт</button>
                    </div>
                </div>
                <div class="col-lg-7 col-lg-offset-5 col-md-7 col-md-offset-7 col-sm-9 col-sm-offset-4 hidden-xs">
                    <div class="hero_statement">
                        <p><i>Ничто так не бодрит с утра, как ремонт кофемашины</i></p>
                        <span class="hero_cite"><i>Мастер Олег</i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?= professionals\widgets\other\Advantage::widget(); ?>
<!-- about -->
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 6, 'title' => 'Частые неисправности', 'is_popular' => true, 'type' => 2]); ?>
<!-- faults -->
<section class="brands">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 class="title title__2">Бренды которые мы чиним</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-10 hidden-sm hidden-xs">
                <div class="coffeemachine-brand">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/coffeemachine-2_DKcAIK9.png" alt="">
                </div>
            </div>
            <div class="col-lg-12 col-md-14 col-sm-24 clearfix">
                <div class="brand-list">
                    <a href="/repair/brand/delonghi/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-1.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/miele/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-12.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/siemens/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-2.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/bosch/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-3.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/jura/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-4.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/gaggia/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-5.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/saeco/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-6.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/nivona/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-7.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/philips/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-8.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/miele/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo-12.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/neff/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/neff.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/franke/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/franke.png" alt="">
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                    <a href="/repair/brand/">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <span>Полный<br/>список</span>
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brands -->
<section class="popular-services">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 class="title title__2 light">Популярные услуги</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24">
                <div class="services" id="services-slider">
                    <div class="services_item">
                        <a href="/repair/service/descale/">
                            <div class="services_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/pic-1.jpg" alt="">
                            </div>
                            <p class="services_title">
                                Декальцинация
                            </p>
                            <div class="services_price"><span class="price-nowrap"><span>500</span>&nbsp;руб.</span></div>
                        </a>
                    </div>
                    <div class="services_item">
                        <a href="/repair/service/burrs/">
                            <div class="services_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/pic-2.jpg" alt="">
                            </div>
                            <p class="services_title">
                                Замена жерновов
                            </p>
                            <div class="services_price"><span class="price-nowrap"><span>500</span>&nbsp;руб.</span></div>
                        </a>
                    </div>
                    <div class="services_item">
                        <a href="/repair/service/cleaning/">
                            <div class="services_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/pic-3.jpg" alt="">
                            </div>
                            <p class="services_title">
                                Чистка от кофейных масел
                            </p>
                            <div class="services_price"><span class="price-nowrap"><span>400</span>&nbsp;руб.</span></div>
                        </a>
                    </div>
                    <div class="services_item">
                        <a href="/repair/service/gidrosystem/">
                            <div class="services_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/pic-4.jpg" alt="">
                            </div>
                            <p class="services_title">
                                Ремонт гидросистемы
                            </p>
                            <div class="services_price"><span class="price-nowrap"><span>850</span>&nbsp;руб.</span></div>
                        </a>
                    </div>
                    <div class="services_item hidden-sm hidden-xs">
                        <a href="/repair/service/pump/">
                            <div class="services_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/pic-5.jpg" alt="">
                            </div>
                            <p class="services_title">
                                Ремонт насоса
                            </p>
                            <div class="services_price"><span class="price-nowrap"><span>750</span>&nbsp;руб.</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row visible-xs visible-sm">
            <div class="col-xs-24 text-center">
                <a href="/repair/service/" class="all-services">Все услуги</a>
            </div>
        </div>
    </div>
</section>
<!-- services -->
<section class="promo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-9 col-sm-11">
                <h2 class="title title__2">Успейте <br>заказать ремонт <br>кофемашины</h2>
                <p class="promo_gift">и получить термокружку <br>"Alpenkok" в подарок!</p>
            </div>
            <div class="col-lg-9 col-lg-offset-7 col-md-11 col-md-offset-4 col-sm-13">
                <div class="countdown-title">До конца акции осталось:</div>
                <div class="countdown" id="countdown"></div>
                <div class="form form__inline">
                    <form class="request-form" action="/request/request/" method="post">
                        <ul>
                            <li><label for="id_phone">Телефон</label><input type="text" name="phone" id="id_phone" placeholder="Телефон" required maxlength="15" /></li>
                        </ul>
                        <input type="submit" value="Перезвоните мне"/>
                        <p class="response-message"></p>
                        <p class="form-policy">
                            Нажимая на кнопку «Перезвоните мне», вы подтверждаете своё совершеннолетие и соглашаетесь на обработку
                            персональных данных в соответствии с <a href="#">условиями</a>.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- promo -->
<section class="our-masters">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 class="title title__2">Наши мастера</h2>
            </div>
        </div>
        <div class="master-list">
            <div class="row">
                <div class="col-sm-8 text-left hidden-xs">
                    <div class="master-card">
                        <div class="master-card_avatar">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/master-1.jpg" alt="">
                        </div>
                        <div class="master-card_name">
                            Сергей Игнатьев
                        </div>
                        <ul class="master-card_rate">
                            <li>
                                <i>
                                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/star-empty.png" alt="">
                                </i>
                                4,5
                            </li>
                            <li>
                                <span>40</span> оценок
                            </li>
                        </ul>
                        <ul class="master-card_achivment">
                            <li>47 устраненных поломок</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 text-center">
                    <div class="master-card-describe">
                        <span>Лучший работник 2017</span>
                        <p>Каждый случай уникален, и если вы не нашли свою поломку, получите бесплатную консультацию</p>
                    </div>
                    <div class="master-card master-card__best">
                        <div class="master-card_avatar">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/master-2.jpg" alt="">
                        </div>
                        <div class="master-card_name">
                            Василий Ноброс
                        </div>
                        <ul class="master-card_rate">
                            <li>
                                <i>
                                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/star-full.png" alt="">
                                </i>
                                5
                            </li>
                            <li>
                                <span>95</span> оценок
                            </li>
                        </ul>
                        <ul class="master-card_achivment">
                            <li>120 устраненных поломок</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 text-right hidden-xs">
                    <div class="master-card">
                        <div class="master-card_avatar">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/master-3.jpg" alt="">
                        </div>
                        <div class="master-card_name">
                            Анатолий Свянин
                        </div>
                        <ul class="master-card_rate">
                            <li>
                                <i>
                                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/star-empty.png" alt="">
                                </i>
                                4,5
                            </li>
                            <li>
                                <span>175</span> оценок
                            </li>
                        </ul>
                        <ul class="master-card_achivment">
                            <li>206 устраненных поломок</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- masters -->
<section class="why-we">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 class="title title__2 light">Почему именно мы?</h2>
            </div>
        </div>
        <div class="advantages">
            <div class="row">
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-1.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Наш курьер приедет в любое удобное для Вас время.<br/><span class="frontlight-brown">Выезд 0 рублей</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-2.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Максимально точно определим причину неисправности.<br/><span class="frontlight-brown">Диагностика 0 рублей</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-3.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Все запчасти для качественного ремонта есть в наличии.<br/><span class="frontlight-brown">На складе 1200 видов запчастей</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-4.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Мы несем ответственность за качество наших услуг и даем гарантию.<br/><span class="frontlight-brown">Гарантия 2 года</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why we -->
<section class="reviews">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 class="title title__2">Отзывы клиентов</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24">
                <div class="reviews-list" id="reviews-slider">
                    <div class="review">
                        <div class="review-wrap">
                            <div class="review_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/12.jpg" alt="">
                            </div>
                            <div class="review_name">Никита Быстров</div>
                            <div class="review_biz">Бизнесмен</div>
                            <div class="review_claim">
                                <p>Я вызывал до этого мастеров на дом. Замучали. Постоянно нет деталей. Позвонил в этот сервис - 1 день и готово. Термокружка качественная.</p>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-wrap">
                            <div class="review_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/2.jpg" alt="">
                            </div>
                            <div class="review_name">Анастасия</div>
                            <div class="review_biz">Бухгалтер</div>
                            <div class="review_claim">
                                <p>Выполнили ремонт очень быстро. Я была уверена, что ремонт кофемашины - дело муторное и долгое, пока не нашла вас! Довольна результатом. Спасибо!</p>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-wrap">
                            <div class="review_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/13.jpg" alt="">
                            </div>
                            <div class="review_name">Виталий</div>
                            <div class="review_biz">IT-инженер</div>
                            <div class="review_claim">
                                <p>Перестала греть воду, хотел починить сам но не решился, побоялся что-то испортить. Вызвал мастера, но он не взялся за работу и просил подождать неделю, пока придет запчасть. Решил звонить в сервис, думал сдерут большие деньги за ремонт, но результатом приятно удивлен: быстро, гарантия 2 года, дешево и с подарком.</p>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-wrap">
                            <div class="review_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/10.jpg" alt="">
                            </div>
                            <div class="review_name">Антон Семиглазов</div>
                            <div class="review_biz">Маркетолог</div>
                            <div class="review_claim">
                                <p>Приехал бесплатный курьер спустя 40 минут после моего звонка, отвез кофемашину в сервис и уже на следующий день доставили обратно на дом, уже исправную машину. Спасибо, сервис – на уровне!</p>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-wrap">
                            <div class="review_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/11.jpg" alt="">
                            </div>
                            <div class="review_name">Константин</div>
                            <div class="review_biz">Менеджер</div>
                            <div class="review_claim">
                                <p>Спасибо сервису Кофепрофи за быстрый ремонт моей славной кофемашины... А особенно за классную термокружку в подарок, свою как раз потерял))</p>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="review-wrap">
                            <div class="review_pic">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/3_i6Bnd9q.jpg" alt="">
                            </div>
                            <div class="review_name">Тамара Голубева</div>
                            <div class="review_biz">Домохозяйка</div>
                            <div class="review_claim">
                                <p>Спасибо компании “КофеПрофи” за быстрый ремонт моей славной кофемашины..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- reviews -->