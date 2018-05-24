<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : app\components\CController::$category['full_title'] . ' ' . \app\components\CController::$monoBrand['title'] . ' в Москве срочно и по лучшим ценам!';
?>
<a href="#"></a>
<!-- header -->
<div class="afterheader">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-6 col-md-9 col-ms-offset-3 col-sm-12">
                <p class="ah_text">
                    Ремонт кофемашин в Москве
                </p>
                <div class="ah_triggers">
                    <p>Наш сервисный центр занимается ремонтом кофемашин #brand_en# на протяжении 10 лет. На основе рекомендаций производителей кофемашин, мы разработали собственные инструкции которые помогают обеспечить качественный и быстрый ремонт кофемашин #brand_en#!</p>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-3">
                            <input type="tel" name="phone" placeholder="Телефон" required/>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="hero-form__btn">Заказать</button>
                        </div>
                    </div>
                </form>
                <div class="mini-text">
                    <p>Перезвоним Вам за 2 минуты!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="aboutmain">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pm_heding linecenter">Преимущества нашего сервисного центра</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="amtrigger_title">
                    <div><img src="<?= $assets . $siteConfig['theme']; ?>/images/icon/1.svg" alt=""></div>
                    Бесплатная диагностика
                </div>
                <p class="amtrigger_text">Перед проведением восстановительных работ, выполняем диагностику, которая является бесплатной.</p>
            </div>
            <div class="col-md-3">
                <div class="amtrigger_title">
                    <div><img src="<?= $assets . $siteConfig['theme']; ?>/images/icon/2.svg" alt=""></div>
                    Бесплатная доставка
                </div>
                <p class="amtrigger_text">Бесплатно заберём и доставим кофемашину в наш сервисный центр.</p>
            </div>
            <div class="col-md-3">
                <div class="amtrigger_title">
                    <div><img src="<?= $assets . $siteConfig['theme']; ?>/images/icon/3.svg" alt=""></div>
                    Гарантия до 1 года
                </div>
                <p class="amtrigger_text">По окончании ремонта, Вам выдаётся официальная гарантия от нашего сервисного центра.</p>
            </div>
            <div class="col-md-3">
                <div class="amtrigger_title">
                    <div><img src="<?= $assets . $siteConfig['theme']; ?>/images/icon/4.svg" alt=""></div>
                    Фирменные запасные части
                </div>
                <p class="amtrigger_text">Мы устанавливаем только оригинальные запасные части, никакого Китая.</p>
            </div>
            <div class="col-md-3">
                <div class="amtrigger_title">
                    <div><img src="<?= $assets . $siteConfig['theme']; ?>/images/icon/5.svg" alt=""></div>
                    Срочный ремонт
                </div>
                <p class="amtrigger_text">Выполняем ремонт кофемашин в максимально короткие сроки.</p>
            </div>
            <div class="col-md-3">
                <div class="amtrigger_title">
                    <div><img src="<?= $assets . $siteConfig['theme']; ?>/images/icon/6.svg" alt=""></div>
                    Любая форма оплаты
                </div>
                <p class="amtrigger_text">Оплатить за услуги сервисного центра можно как наличными, так и безналичным платежом и пластиковыми картами.</p>
            </div>
            <div class="col-md-3">
                <div class="amtrigger_title">
                    <div><img src="<?= $assets . $siteConfig['theme']; ?>/images/icon/7.svg" alt=""></div>
                    Приедем за 1 час
                </div>
                <p class="amtrigger_text">После согласования заказа, наш курьер приедет за неисправной кофемашиной не позднее 1 часа.</p>
            </div>
            <div class="col-md-3">
                <div class="amtrigger_title">
                    <div><img src="<?= $assets . $siteConfig['theme']; ?>/images/icon/8.svg" alt=""></div>
                    Самые лояльные цены
                </div>
                <p class="amtrigger_text">Никаких переплат и скрытых платежей. Всё предельно чисто и прозрачно.</p>
            </div>
        </div>
    </div>
</div>
<div class="pricesmain">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pm_heding linecenter">Что с вашей кофемашиной?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel pmowl-carousel">
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Ошибка на дисплее</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Протекает вода</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Нет подачи воды</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Нет питания</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Ошибка на дисплее</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Протекает вода</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Нет подачи воды</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Нет питания</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ctaprefooter">
    <div class="col-md-6 ctapf_left p-left-reset">
        <div class="row">
            <div class="col-md-10 col-md-offset-2 p-left-reset col-lg-7 col-lg-offset-5">
                <div class="ctapf_container">
                    <span class="ctapfsale_block">
                        <span class="ctapf_salesale">скидка<br></span><span class="ctapf_salehm"> - 25% </span>
                        на все услуги сервисного центра
                    </span>
                </div>
                <div class="ctapfaction_text">
                    Скидка предоставляется при заказе услуг через сайт нашего сервисного центра. 
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 ctapf_right p-right-reset">
        <div class="col-md-10 p-all-reset  col-lg-7">
            <form class="ctapfform" action="http://appleofficialservice.ru/assets/post.php" method="POST">
                <p>Хотите получить скидку?</p>
                <input type="tel" name="phone" placeholder="Телефон" required/>
                <input type="text" name="message" class="hiddenmodel">
                <button type="submit" class="hero-form__btn">Заказать</button>
            </form>
        </div>
    </div>
</div>
<div class="pricesmain">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pm_heding linecenter">Что с вашей кофемашиной?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel pmowl-carousel">
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Ошибка на дисплее</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Протекает вода</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Нет подачи воды</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Нет питания</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Ошибка на дисплее</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Протекает вода</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Нет подачи воды</span>
                    </a>
                    <a href="#">
                        <div class="img">
                            <img src="<?= $assets . $siteConfig['theme']; ?>/images/model/1.jpg" alt="" title="" class="img-responsive">
                        </div>
                        <span>Нет питания</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="adrespremap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="kontakty.html" class="linecenter apm_heading">АДРЕС СЕРВИСНОГО ЦЕНТРА</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 p-all-reset col-md-offset-2">
                <p class="apm_description">Наш сервисный центр готов забрать кофемашину из любой точки города Москвы. Доставка предоставляется бесплатно!</p>
            </div>
        </div>
    </div>
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acc30ed25b2d645f1d0a2ca996a3c577d8ee81b0c0ec826c52e8bae1659f22c51&amp;source=constructor" width="100%" height="350" scrolling="no" frameborder="0"></iframe>
</div>
<div class="revmain">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="rm_heading linecenter">Что говорят о нас?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="revcarousel_container">
                    <div class="owl-carousel rev-carousel">
                        <div class="revcar_block irina-mirosh">
                            <div class="col-md-3 p-left-reset text-center">
                                <div class="rm_image" style="background-image: url(<?= $assets . $siteConfig['theme']; ?>/images/user.svg);"></div>
                            </div>
                            <div class="col-md-9 p-left-reset">
                                <div class="revcartext_container">
                                    <div class="revname">
                                        Виолетта Александровская                                            
                                    </div>
                                    <div class="revtext">Берегите свою технику! Обронила планшет Эпл в раковину, пришлось срочно исправлять ситуацию). Отключила, сняла батарею и побежала в Apple service заказывать срочный ремонт). Привезли через пару часов на дом, просушили и почистили. Благодарю!                                         </div>
                                </div>
                            </div>
                        </div>
                        <div class="revcar_block elya-bagautdinova">
                            <div class="col-md-3 p-left-reset text-center">
                                <div class="rm_image" style="background-image: url(<?= $assets . $siteConfig['theme']; ?>/images/user.svg);"></div>
                            </div>
                            <div class="col-md-9 p-left-reset">
                                <div class="revcartext_container">
                                    <div class="revname">
                                        Григорий Астафьев                                           
                                    </div>
                                    <div class="revtext">Купил 10 макбуков Apple для своей компании, сразу договорился о сотрудничестве с надежным сервисом от Эпл. Радует бесплатный вызов мастера и диагностика. Пару раз быстро решали проблемы, поэтому и решил отзыв оставить. Успехов друзья!                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="revcar_block marina-vasilevskaya">
                            <div class="col-md-3 p-left-reset text-center">
                                <div class="rm_image" style="background-image: url(<?= $assets . $siteConfig['theme']; ?>/images/user.svg);"></div>
                            </div>
                            <div class="col-md-9 p-left-reset">
                                <div class="revcartext_container">
                                    <div class="revname">
                                        Иван Милютин                                            
                                    </div>
                                    <div class="revtext">У меня вся техника фирмы Эпл. Недавно случайно уронил телефон - треснул экран. До этого падал, никогда проблем небыло. Хорошо, что в центре Apple смогли только сенсор поменять, оказалось, что матрица в порядке. Отделался легким испугом.                                          </div>
                                </div>
                            </div>
                        </div>
                        <div class="revcar_block anton-sizikov">
                            <div class="col-md-3 p-left-reset text-center">
                                <div class="rm_image" style="background-image: url(<?= $assets . $siteConfig['theme']; ?>/images/user.svg);"></div>
                            </div>
                            <div class="col-md-9 p-left-reset">
                                <div class="revcartext_container">
                                    <div class="revname">
                                        Евгений Кудряшов                                            
                                    </div>
                                    <div class="revtext">
                                        <p>Завис планшетник Apple, попытался сам починить, не помогло). Перепрошили и настроили в официальном сервисе, ремонтам в киосках не верю. Эпл – не дешевые устройства, слишком жалко доверять не понятно кому. Кстати довольно дешево обошлось.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="revcar_block ernest-preskuryan">
                            <div class="col-md-3 p-left-reset text-center">
                                <div class="rm_image" style="background-image: url(<?= $assets . $siteConfig['theme']; ?>/images/user.svg);"></div>
                            </div>
                            <div class="col-md-9 p-left-reset">
                                <div class="revcartext_container">
                                    <div class="revname">
                                        Сергей Дробенцов                                            
                                    </div>
                                    <div class="revtext">
                                        <p>Наша фирма снабжена только техникой Эпл и не в статусе дело (хотя и в нем тоже), но и в качестве. Сотрудничаем с авторизованным центром. Проблема с ноутбуком, ПК или смартфоном Apple – сразу сюда обращаемся. Ребята не подводят.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="revcar_block natalya-dovgoshey">
                            <div class="col-md-3 p-left-reset text-center">
                                <div class="rm_image" style="background-image: url(<?= $assets . $siteConfig['theme']; ?>/images/user.svg);"></div>
                            </div>
                            <div class="col-md-9 p-left-reset">
                                <div class="revcartext_container">
                                    <div class="revname">
                                        Ирина Федчук                                            
                                    </div>
                                    <div class="revtext">
                                        <p>У меня мини ПК от Эпл, никогда не ломался (все 5 лет). Раз в год заказываю курьера и отправляю сюда на диагностику (услуги бесплатны) и чистку, может, поэтому и ни одного сбоя. Рекомендую технику Apple и конечно не забывать про обслуживание в тех центр...                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>