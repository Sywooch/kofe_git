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
                <div class="col-lg-11 col-md-10 col-sm-11">
                    <div class="hero_order">
                        <h1 class="title title__1 light title__home"><?= $page['meta_h1']; ?></h1>
                        <div class="subtitle" style="font-size: 14px;">В сервисном центре</div>
                        <div class="form form__inline form-block__repair form-block__light">
                           <p class="subtitle">Хотите подарок? Введите Ваш номер телефона и получите его!</p>
                           <form class="request-form" action="/request/request/" method="post">
                              <input type='hidden' name='csrfmiddlewaretoken' value='6BziyPShoarGBPiSBXNW9xU51mC36tZCgWzjhdd3LcbRjOJqihjY7HrohgwUfmBo' />
                              <ul>
                                 <li><label for="id_phone">Телефон</label><input type="text" name="phone" id="id_phone" placeholder="Телефон" required maxlength="15" /></li>
                              </ul>
                              <button type="submit">Выбрать подарок</button>
                           </form>
                           <div class="gift">
                              <div class="gifts"><img src="" alt=""></div>
                              <div class="gifts"><img src="" alt=""></div>
                              <div class="gifts"><img src="" alt=""></div>
                           </div>
                           <p class="form-policy">
                              Нажимая на кнопку «Перезвоните мне», вы подтверждаете своё совершеннолетие и соглашаетесь на обработку
                              персональных данных в соответствии с <a href="#">условиями</a>.
                           </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-5 col-md-7 col-md-offset-7 col-sm-9 col-sm-offset-4 hidden-xs" style="position: relative;">
                    <div class="hero_statement">
                        <blockquote data-timeout="2800">
                           <p>Ремонт для нас - как кислород для Вас!</p>
                           <span class="hero_cite">Мастер Олег</span>
                        </blockquote>
                        <blockquote data-timeout="2800">
                           <p>У вас страсть к кофе, а у нас к ремонту кофемашин!</p>
                           <span class="hero_cite">Мастер Илья</span>
                        </blockquote>
                        <blockquote data-timeout="2800">
                           <p>Ничто так не бодрит с утра, как ремонт кофемашины!</p>
                           <span class="hero_cite">Мастер Игорь</span>
                        </blockquote>
                        <blockquote data-timeout="2800">
                           <p>Мы не делаем из мухи слона - мы делаем кофемашины!</p>
                           <span class="hero_cite">Мастер Андрей</span>
                        </blockquote>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <div id="canvas-cont">
        <canvas class="waterwave-canvas"></canvas>
    </div>
</header>
<?= professionals\widgets\other\Advantage::widget(); ?>
<!-- about -->
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 6, 'title' => 'Частые неисправности', 'is_popular' => true, 'type' => 2]); ?>
<!-- faults -->
<?= professionals\widgets\lists\PopularBrands::widget(); ?>
<!-- brands -->
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Популярные услуги', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>
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