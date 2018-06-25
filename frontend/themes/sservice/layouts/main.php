<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
$assets = '/' . Yii::getAlias('@web');
$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$isModelPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'model' ? true : false;
$isBrandPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'brand' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
?>
<!DOCTYPE html>
<html lang="ru">    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/favicon.ico" type="image/x-icon">
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/styles_8560940ca7.min.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/font-awesome.min.css" type="text/css" />
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php
        if (!Yii::$app->user->isGuest) {
            echo '<div style="float: left; z-index: 99999;position: absolute;" class="container">';
            $domain = $_SERVER['SERVER_NAME'];
            if (isset($_GET['data']['is_service'])) {
                if (count(explode('/', Yii::$app->request->pathInfo)) > 1) {
                    echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '&site_id=' . $siteConfig['id'] . '">Ред. эту страницу.</a>';
                } else {
                    echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '&site_id=' . $siteConfig['id'] . '">Ред. эту страницу.</a><br>';
                    echo '<a target="_blank" href="http://admin.' . $domain . '/services/update/' . $_GET['data']['id'] . '">Ред. глобальную страницу</a>';
                }
            } else {
                echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '&site_id=' . $siteConfig['id'] . '">Ред. эту страницу.</a><br>';
                if (!empty($_GET['data']))
                    echo '<a target="_blank" href="http://admin.' . $domain . '/page/update/' . $_GET['data']['id'] . '">Ред. глобальную страницу</a>';
            }
            echo '</div>';
        }
        ?>
        <header<?= $isHome ? ' style="background-image: url(\'/' . $siteConfig['theme'] . 'images/back.png\');"' : ' class="noindex"' ?>>
            <div class="wrap2">
                <div class="top_head saeco_head">
                    <div class="menu_link"></div>
                    <div class="logo">
                        <a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logo.png" alt=""></a>
                    </div>
                    <ul class="menu">
                        <li><a href="#">Все модели</a></li>
                        <li><a href="#">Прайс</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                    <span href="#zakaz" class="zakaz inline">заказать звонок</span>
                    <div class="right">
                        <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="tel"><?= Yii::$app->session['region']['phone']; ?></a>
                        <div class="clr"></div>
                        <p class="time">ПН-ВC c 9.00 до 22.00</p>
                    </div>
                </div>
                <div class="content_head">
                    <div class="left">
                        <h1>РЕМОНТ КОФЕМАШИН <span>SAECO</span> В САНКТ-ПЕТЕРБУРГЕ</h1>
                        <ul class="icon">
                            <li><i class="help-icon"></i><span>В ДЕНЬ ОБРАЩЕНИЯ</span></li>
                            <li><i class="garantiya-icon"></i><span>ГАРАНТИЯ  ОДИН ГОД</span></li>
                            <li><i class="deagnostika"></i><span>БЕСПЛАТНАЯ ДИАГНОСТИКА</span></li>
                        </ul>
                    </div>
                    <div class="right">
                        <div class="form">
                            <form>
                                <div class="h3">ВЫЗВАТЬ МАСТЕРА НА ДОМ</div>
                                <ul>
                                    <li>Диагностика - 1500р 0р</li>
                                    <li>Забор и доставка кофемашины - 1000р 0р</li>
                                    <li>На время ремонта предоставляем кофемашину - БЕСПЛАТНО!</li>
                                    <li>Гарантия 24 месяца* (в зависимости от типа ремонта)</li>
                                </ul>
                                <label><input class="phone" id="phone4" name="Телефон" required="" placeholder="Телефон" type="text"></label>
                                <button>Отправить</button>
                                <span class="pol">Ваши данные защищены <a class="polit" href="#">Политика конфиденциальности</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="advantages">
            <div class="wrap">
                <div class="h2">Наши преимущества</div>
                <div class="content">
                    <div class="item">
                        <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/1.jpg" alt=""></div>
                        <p>Работаем на рынке по ремонту кофемашин 8 лет</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/2.jpg" alt=""></div>
                        <p>Инженеры нашей компании только профи, имеют опыт от 6 лет</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/3.jpg" alt=""></div>
                        <p>Только оригинальные запчасти. Все расходники и чистящие средства Германия.</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/4.jpg" alt=""></div>
                        <p>С уверенностью даём гарантии на работу от 1 года</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/5.jpg" alt=""></div>
                        <p>Прямые заказы от лучших поставщиков, что гарантирует лучшее качество и конкурентную стоимость</p>
                    </div>
                    <div class="item">
                        <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/6.jpg" alt=""></div>
                        <p>Продаём запчасти только с установкой</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content4 saeco_stages">
            <div class="wrap">
                <div class="content4_1">
                    <h2>Этапы ремонта</h2>
                    <div class="stages">
                        <div class="stage">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/stage1.png" alt="Заявка">
                            <p>Звонок/заявка<br>
                                на ремонт
                            </p>
                        </div>
                        <div class="stage">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/stage2.png" alt="Выезд">
                            <p>Выезд мастера<br>
                                на дом или офис
                            </p>
                        </div>
                        <div class="stage">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/stage3.png" alt="Ремонт">
                            <p>Ремонт на месте<br>
                                или в сервисе
                            </p>
                        </div>
                    </div>
                    <div class="logka"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logka.png" alt="Этапы ремонта"></div>
                </div>
            </div>
        </div>
        <div class="content5 saeco_statistic">
            <div class="wrap">
                <div class="item" style="margin-right: 60px;">
                    <p>12 639</p>
                    <span>Всего обращений</span>
                </div>
                <div class="item" style="margin-right: 60px;">
                    <p>12 133</p>
                    <span>Выполненных ремонта</span>
                </div>
                <div class="item" style="margin-right: 60px;">
                    <p>92,7%</p>
                    <span>Наличие запчастей на складе</span>
                </div>
                <div class="item">
                    <p>17</p>
                    <span>Выездных мастеров</span>
                </div>
            </div>
        </div>
        <div class="neispravnosti">
            <div class="wrap">
                <div class="h2">Типы неисправностей</div>
                <div class="content">
                    <div class="left">
                        <div class="blok">
                            <h5 class="h5"><span>01</span>Не мелит кофе</h5>
                            <ul>
                                <li>- залита кофемолка</li>
                                <li>- сгорел двигатель</li>
                                <li>- попал инородный предмет в &nbsp;&nbsp;кофемолку</li>
                                <li>- проблема с электроникой</li>
                            </ul>
                        </div>
                        <div class="blok">
                            <h5 class="h5"><span>02</span>Не подается кофе</h5>
                            <ul>
                                <li>- проблема с блоком &nbsp;&nbsp;заваривания</li>
                                <li>- забит узел выдачи кофе</li>
                                <li>- сбиты настройки кофемолки</li>
                                <li>- не работает гидросистема</li>
                            </ul>
                        </div>
                        <div class="blok">
                            <h5 class="h5"><span>03</span>Не работает</h5>
                            <ul>
                                <li>- проблема с силовой платой</li>
                                <li>- проблема с блоком &nbsp;&nbsp;заваривания</li>
                                <li>- не видит поддона</li>
                                <li>- требуется чистка</li>
                            </ul>
                        </div>
                        <div class="blok">
                            <h5 class="h5"><span>04</span>Выдает ошибку</h5>
                            <ul>
                                <li>- неисправна термосистема</li>
                                <li>- неисправна гидросистема</li>
                                <li>- заклинило кофемолку</li>
                                <li>- не видит контейнера/поддоны</li>
                            </ul>
                        </div>
                    </div>
                    <div class="center-img">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/kofemashina/saeco.png" alt="">
                    </div>
                    <div class="right">
                        <div class="blok">
                            <h5 class="h5"><span class="lef">05</span>Не включается<span class="rig">05</span></h5>
                            <ul>
                                <li>- проблема с силовой платой</li>
                                <li>- проблема с платой логики</li>
                                <li>- сгорел трансформатор</li>
                                <li>- проблема с термосистемой</li>
                            </ul>
                        </div>
                        <div class="blok">
                            <h5 class="h5"><span class="lef">06</span>Мелит, но не варит<span class="rig">06</span></h5>
                            <ul>
                                <li>- сбиты настройки кофемолки</li>
                                <li>- не работает блок заваривания</li>
                                <li>- неисправна гидросистема</li>
                                <li>- не работают датчики наличия &nbsp;&nbsp;молотого кофе</li>
                            </ul>
                        </div>
                        <div class="blok">
                            <h5 class="h5"><span class="lef">07</span>Протекает<span class="rig">07</span></h5>
                            <ul>
                                <li>- износ уплотнений</li>
                                <li>- износ шланга высокого &nbsp;&nbsp;давления</li>
                                <li>- забита дренажная система</li>
                            </ul>
                        </div>
                        <div class="blok">
                            <h5 class="h5"><span class="lef">08</span>Требует чистку<span class="rig">08</span></h5>
                            <ul>
                                <li>- декальцинация</li>
                                <li>- удаление кофейных масел</li>
                                <li>- чистка кофемолки</li>
                                <li>- комплексная чистка с разбором &nbsp;&nbsp;корпуса</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content2 saeco_kachestvo">
            <div class="wrap">
                <div class="content2_1">
                    <div class="left">
                        <div class="txt">
                            8 <small>лет</small> <span>опыт работы</span>
                        </div>
                        <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/item_op1.png" alt="Опыт работы"></div>
                    </div>
                    <div class="text">
                        <div class="h1">Часто задаваемые вопросы</div>
                        <div class="item active">
                            <div class="ask">Какие виды ремонта кофемашин вы оказываете?</div>
                            <div class="abdu">Сервисный центр предоставляет полный спектр услуг по восстановлению работоспособности кофемашины, а также проводит профессиональное техническое обслуживание и настройку под озвученные клиентом параметры.</div>
                        </div>
                        <div class="item">
                            <div class="ask">По каким параметрам определяется гарантийный срок после проведения ремонта кофемашины?</div>
                            <div class="abdu">Компания берет на себя обязательства по предоставлению бесплатного ремонта в случае повторного отказа вашей кофемашины при действующей гарантии. Срок гарантии зависит напрямую от осуществленных услуг. При проведении профилактических процедур в сервисном центре, гарантия не имеет длительного срока, так как сохранность в чистоте зависит от самого пользователя.</div>
                        </div>
                        <div class="item">
                            <div class="ask">Какова средняя продолжительность ремонтных работ?</div>
                            <div class="abdu">Длительность восстановительных работ разграничивается на три этапа: мелкий, средний или капитальный ремонт. В зависимости от сложности поломки и наличие комплектующей, мастер до начала работ ознакамливает заказчика со сроками. При этом мы можем гарантировать, что работы над устранением неполадок вашего устройства начинаются сразу же при получении вашего согласия.</div>
                        </div>
                        <div class="item">
                            <div class="ask">Как узнать цену на ремонт кофемашины?</div>
                            <div class="abdu">На сайте компании имеется прайс-лист с указанием цен на наши услуги, но стоит учитывать, что каждая поломка индивидуальна и поэтому точная стоимость ремонта определяется только после проведения диагностики.</div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/item_op2.png" alt="Время прибытия"></div>
                        <div class="txt">
                            1 <small>час</small> <span>время прибытия<br>
                                специалиста</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content3_viezd saeco_visit">
            <div class="wrap">
                <div class="block">
                    <p>Привязать скидку 5% на работы и запчасти к номеру телефона</p>
                    <form action="#" method="post" class="zayavka_phone ajax_form">
                        <input type="tel" name="phone" class="phone" placeholder="Номер телефона">
                        <button type="submit">отправить</button>
                    </form>
                </div>
                <p><span>*</span>Скидка предоставляется на чистку и декальцинацию только для 1-ой кофемашины.</p>
                <p><span>*</span>Скидка на регулярное плановое обслуживание 7% предоставляется при заключении договора регламентного обслуживания</p>
            </div>
        </div>
        <div class="content3 saeco_garantiya">
            <div class="wrap">
                <h2>Гарантия сервиса Saeco до 3-х лет</h2>
                <p>При возникновении гарантийного случая мастер выезжает по адресу вне очереди. Сервис кофемашин SaecoService24.ru предоставляет 100% гарантию на все виды работ и комплектующих. Срок гарантийного обслуживания — от года до трех лет.</p>
                <div class="clr"></div>
                <a href="warranty.html" class="pdb">Подробнее о гарантии</a>
                <div class="cup"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/cup.png" alt="Гарантия"></div>
            </div>
        </div>
        <div class="content2 saeco_original" style="background: #19171e; padding-top: 0; margin-top: -40px;">
            <div class="wrap">
                <div class="content2_2" style="padding-top: 0;">
                    <div class="left">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/original.jpg" alt="Комплектующие">
                    </div>
                    <div class="right">
                        <div>
                            <p>Эффективный ремонт кофемашин в Москве, любого бренда и модели проводится в сервисном центре с применением высокотехнологичного оборудования и оригинальных комплектующих. Обращаясь к нам, вы получаете качественные услуги по приятным ценам и официальную гарантию сроком до двух лет. Комфортные условия позволят вам не нарушать рабочий график и получать всю информацию по ходу восстановления в оперативном режиме. У нас вы получите профессиональный ремонт кофемашин по доступной стоимости и с гарантированно высоким качеством.</p>
                            <h2>ТИПОВЫЕ НЕИСПРАВНОСТИ</h2>
                            <p>Благодаря многолетней практике нашего сервисного центра, нашими специалистами была собрана огромная база данных, проанализировав которую можно выделить самые частые причины поломки кофеварочных машин. Ниже мы приведем любопытные данные, которые нам удалось выяснить в ходе исследования сервисной базы. К наиболее распространенным факторам, приводящим к поломке и ремонту кофейной техники, относятся:</p>
                            <ul>
                                <li>&nbsp;Известковые отложения вследствие применения некачественной воды;</li>
                                <li>&nbsp;Изнашивание деталей в процессе регулярной эксплуатации;</li>
                                <li>&nbsp;Скачки напряжения в электросети;</li>
                                <li>&nbsp;Загрязнение кофейными жирами внутренних систем;</li>
                                <li>&nbsp;Некорректная настройка.</li>
                            </ul>
                            <p>Проводя современную очистку и профилактическое обслуживание вы тем самым продлеваете срок использования устройства и застраховываете себя от неожиданных поломок. Многие серьезные неисправности можно предотвратить, если тщательно следить за состоянием устройства, и обеспечить ей полагающийся профилактический уход, что поможет не тратиться на ремонт кофемашины. Если с ней начали происходить не одними из первых вестников проблем считаются:</p>
                            <ul>
                                <li>&nbsp;Слишком низкая или чересчур высокая температура</li>
                                <li>&nbsp;Изменившийся вкус и аромат кофе</li>
                                <li>&nbsp;Посторонний шум при работе</li>
                                <li>&nbsp;Образование лужи в поддоне</li>
                            </ul>
                            <p>Несмотря на кажущуюся простоту механизма кофемашины, отремонтировать устройство сможет только опытный и грамотный инженер. Неквалифицированное вмешательство может повлечь за собой тяжелые последствия в виде усугубившейся неисправности или окончательном выходе из строя. Как только вы заметили один из признаков, сразу же звоните нашим мастерам и в самый короткий срок вы получите высококлассный ремонт кофемашины в Москве.</p>
                            <h2>СТОИМОСТЬ РЕМОНТНЫХ РАБОТ</h2>
                            <p>Ценовая политика компании строится на том, чтобы каждый наш клиент знал за что он платит. Окончательная сумма восстановления оговаривается только после проведения диагностики и разъясняется по пунктам. Сервисный центр проводит регулярные акции и скидки на самые популярные услуги, с которыми вы можете ознакомиться на сайте или узнать у операторов. Также вы можете узнать предварительные цены на наши услуги, просмотрев наш сервисный прейскурант.</p>
                            <p>Помимо бесплатного диагностического осмотра и высококачественного ремонта, вы можете получить услуги по транспортировке неисправного устройства в специально предназначенном герметичном боксе, который защитит вашу кофеварочную машину от возможных повреждений по пути в нашу ремонтную мастерскую. Оплату за услуги можно произвести наличной и безналичной суммой, а также перечислением. Для физических и юридических лиц предлагается заключение договора на плановое техническое обслуживание.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content7">
            <div class="left">
                <div class="map">
                    <div id="map" style="width:100%; height:788px;">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor:ca8df37dbbfb52d82acd0b9bfb8e05a8d36d38665066643826b49abf1d0701a0&amp;width=100%&amp;height=788&amp;lang=ru_RU&amp;scroll=false"></script>
                    </div>
                </div>
            </div>
            <div class="right">
                <h2>Контактная информация</h2>
                <p>Выездной ремонт кофемашин Saeco в&nbsp;Москве и&nbsp;Московской&nbsp;области</p>
                <p>Адрес: г. Москва, Октябрьская улица, дом 7 (вход&nbsp;со&nbsp;двора)</p>
                <div class="item">
                    <span>График работы</span>
                    <p>ПН-ВC c 9.00 до 22.00</p>
                </div>
                <div class="item">
                    <span>Телефон</span>
                    <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                </div>
                <h3>5% скидка на работы + запчасти при заявке с сайта</h3>
                <form action="#" method="post" class="zayavka_footer ajax_form">
                    <input type="tem" name="phone" class="phone" placeholder="Номер телефона">
                    <button type="submit">отправить</button>
                </form>
            </div>
        </div>
        <footer>
            <div class="wrap2 saeco_footer">
                <a href="/" class="logo saeco">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logo.png" alt="saecoservice24.ru">
                </a>
                <div class="line"></div>
                <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="tel"><?= Yii::$app->session['region']['phone']; ?></a>
            </div>
        </footer>
        <div style="display: none">
            <div id="zakaz" style="display: inline-block;">
                <h3>Оставьте заявку <span>Мастер наберет вам в течение одной минуты</span></h3>
                <form action="#" method="post" class="zayavka ajax_form">
                    <input type="tel" name="phone" id="phone" class="phone" placeholder="Ваш телефон">
                    <button type="submit">Заказать звонок</button>
                    <span>Нажимая на кнопку «Заказать звонок»,
                        вы даете  согласие на обработку своих
                        персональных данных</span>
                </form>
            </div>
            <div id="add_review" class="saeco_add_review" style="display: inline-block;">
                <h3>Добавить отзыв</h3>
                <form action="#" method="post" class="zayavka ajax_form">
                    <input type="text" name="name" id="name" placeholder="Номер заказа" class="name">
                    <textarea name="message" id="message" class="message" placeholder="Текст отзыва"></textarea>
                    <button type="submit">Отправить</button>
                    <span>Нажимая на кнопку «Отправить»,
                        вы даете  согласие на обработку своих
                        персональных данных</span>                   
                </form>
            </div>
            <a href="#thanks" class="thanks inline"></a>
            <div id="thanks">
                <h3>Спасибо за заявку  <span>Мы перезвоним Вам в ближайшее время</span></h3>
            </div>
        </div>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/scripts_1ec74d237f.min.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/default.js"></script>
        <?= !empty($js['content']) ? $js['content'] : ''; ?>
        <?php
        if (Yii::$app->session->getFlash('success')) {
            echo '<script>$(".' . $siteConfig['sitePrefix'] . 'modal-backdrop").addClass("' . $siteConfig['sitePrefix'] . 'show"); $("#modalGood").addClass("' . $siteConfig['sitePrefix'] . 'show");</script>';
        }
        ?>
        <script>
            $("form").each(function () {
                $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
            });
            $('body').on("keyup", "input[type=tel]", function () {
                var v = $(this).val().substring(4, 6);
                if ($(this).val().length >= 18 && $(this).val().indexOf("_") == -1) {
                    $.post("/order-send", {phone: $(this).val(), title: $("h1").text()});
                }
            });</script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>