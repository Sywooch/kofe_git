<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $assets . $siteConfig['theme'] . '/'; ?>favicon.ico"/>
        <link type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/materialdesignicons.min.css" rel="stylesheet" media="screen" />
        <link type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>fonts/stylesheet.css" rel="stylesheet" media="screen" />
        <link type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.css" rel="stylesheet" media="screen" />
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="video-bg">
            <video playsinline autoplay muted loop>
                <source src="<?= $assets . $siteConfig['theme'] . '/'; ?>video/kava.mp4" type="video/mp4">
            </video>
        </div>
        <div class="header">
            <div class="logo">
                <a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/logo.svg" alt=""></a>
            </div>
            <div class="number">
                <a class="phone-h-msk" href="tel:+74951520707">8 (495) 152-07-07</a>
                <span>Работаем с 9:00 до 20:00</span>
            </div>
        </div>
        <div class="body">
            <?= $content; ?>
            <div class="big-text">
                Ответьте на 7 вопросов и узнайте стоимость ремонта
            </div>
            <div class="normal-text">
                не выходя из дома
            </div>
            <div class="smoll-text">
                Это займет 1 минуту
            </div>
            <div class="open-b">Узнать стоимость</div>
        </div>
        <div id="popup" class="popup">
            <div class="bg close"></div>
            <div class="content">
                <div class="icon-close close"><i class="mdi mdi-close mdi-24px"></i> </div>
                <div class="title-popup">
                    <i class="mdi mdi-checkbox-multiple-marked-outline mdi-24px"></i> 
                    <span>Ответьте на 7 вопросов и узнайте стоимость ремонта не выходя из дома</span>
                </div>
                <section id="one" class="tabcontent" style="display: block;">
                    <div class="title-question">Какой кофе используется в кофемашине?</div>
                    <div class="progress__label">Готово:<span>0%</span> <div class="vasha-skidka">Ваша скидка: <span>0%</span></div></div>
                    <div class="progress"><span style="width: 0%;"></span></div>
                    <div class="popup-body">
                        <div id="img-question">
                            <div onclick="openCity(event, 'two')" class="radio-question">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/1.jpg" alt="">
                                <div class="answer-image__title">Зерновой</div>
                            </div>
                            <div onclick="openCity(event, 'two')" class="radio-question">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/2.jpg" alt="">
                                <div class="answer-image__title">Молотый</div>
                            </div>
                            <div onclick="openCity(event, 'two')" class="radio-question">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/3.jpg" alt="">
                                <div class="answer-image__title">Капсульный</div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-popup">
                        <button disabled="disabled" class="tablinks button-next p-button" onclick="openCity(event, 'two')"><i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i><span>Далее</span></button>
                    </div>
                </section>

                <section id="two" class="tabcontent">
                    <div class="title-question">Выберите бренд кофемашины</div>
                    <div class="progress__label">Готово:<span>14%</span> <div class="vasha-skidka">Ваша скидка: <span>4%</span></div></div>
                    <div class="progress"><span style="width: 14%;"></span></div>
                    <div class="popup-body">
                        <select name="brend" id="select-brend">
                            <option value="">Выберите бренд:</option>
                            <option value="Delonghi">Delonghi</option>
                            <option value="Saeco">Saeco</option>
                            <option value="Jura">Jura</option>
                            <option value="Bork">Bork</option>
                            <option value="Bosch">Bosch</option>
                            <option value="Miele">Miele</option>
                            <option value="Nivona">Nivona</option>
                            <option value="Nuova Simonelli">Nuova Simonelli</option>
                            <option value="Melitta">Melitta</option>
                            <option value="Siemens">Siemens</option>
                            <option value="Bork">Bork</option>
                            <option value="La Cimbali">La Cimbali</option>
                            <option value="Philips">Philips</option>
                        </select>
                    </div>
                    <div class="footer-popup">
                        <button class="tablinks button-prev" onclick="openCity(event, 'one')"><i class="mdi mdi-arrow-left"></i><span>Назад</span></button>
                        <button disabled="disabled" class="tablinks button-next p-button" onclick="openCity(event, 'three')"><i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i><span>Далее</span></button>
                    </div>
                </section>

                <section id="three" class="tabcontent">
                    <div class="title-question">Вы юридическое или физическое лицо?</div>
                    <div class="progress__label">Готово:<span>29%</span> <div class="vasha-skidka">Ваша скидка: <span>7%</span></div></div>
                    <div class="progress"><span style="width: 29%;"></span></div>
                    <div class="popup-body">
                        <div id="answer-variants">
                            <div onclick="openCity(event, 'four')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Физическое лицо</span>
                            </div>
                            <div onclick="openCity(event, 'four')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Юридическое лицо</span>
                            </div>
                        </div>
                    </div>
                    <div class="footer-popup">
                        <button class="tablinks button-prev" onclick="openCity(event, 'two')"><i class="mdi mdi-arrow-left"></i><span>Назад</span></button>
                        <button disabled="disabled" class="tablinks button-next p-button" onclick="openCity(event, 'four')"><i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i><span>Далее</span></button>
                    </div>
                </section>

                <section id="four" class="tabcontent">
                    <div class="title-question">Опишите, пожалуйста, проблему или выберите неисправность</div>
                    <div class="progress__label">Готово:<span>43%</span> <div class="vasha-skidka">Ваша скидка: <span>11%</span></div></div>
                    <div class="progress"><span style="width: 43%;"></span></div>
                    <div class="popup-body">
                        <div id="answer-variants">
                            <div class="radio-question">
                                <i class="mdi mdi-checkbox-blank"></i><i class="mdi mdi-checkbox-marked"></i><span>Не подает воду</span>
                            </div>
                            <div class="radio-question">
                                <i class="mdi mdi-checkbox-blank"></i><i class="mdi mdi-checkbox-marked"></i><span>Не наливает кофе</span>
                            </div>
                            <div class="radio-question">
                                <i class="mdi mdi-checkbox-blank"></i><i class="mdi mdi-checkbox-marked"></i><span>Протекает</span>
                            </div>
                            <div class="radio-question">
                                <i class="mdi mdi-checkbox-blank"></i><i class="mdi mdi-checkbox-marked"></i><span>Выдает ошибку</span>
                            </div>
                            <div class="radio-question">
                                <i class="mdi mdi-checkbox-blank"></i><i class="mdi mdi-checkbox-marked"></i><span>Плохо течет кофе</span>
                            </div>
                            <div class="radio-question">
                                <i class="mdi mdi-checkbox-blank"></i><i class="mdi mdi-checkbox-marked"></i><span>Кофе невкусный</span>
                            </div>
                            <div class="radio-question">
                                <i class="mdi mdi-checkbox-blank"></i><i class="mdi mdi-checkbox-marked"></i><span>Кофе слишком горячий/холодный</span>
                            </div>
                            <div class="radio-question">
                                <i class="mdi mdi-checkbox-blank"></i><i class="mdi mdi-checkbox-marked"></i><span>Не включается</span>
                            </div>
                        </div>
                    </div>
                    <div class="footer-popup">
                        <button class="tablinks button-prev" onclick="openCity(event, 'three')"><i class="mdi mdi-arrow-left"></i><span>Назад</span></button>
                        <button disabled="disabled" class="tablinks button-next p-button" onclick="openCity(event, 'five')"><i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i><span>Далее</span></button>
                    </div>
                </section>

                <section id="five" class="tabcontent">
                    <div class="title-question">Кофемашина используется в домашних условиях или в офисе/кафе/ресторане</div>
                    <div class="progress__label">Готово:<span>57%</span> <div class="vasha-skidka">Ваша скидка: <span>14%</span></div></div>
                    <div class="progress"><span style="width: 57%;"></span></div>
                    <div class="popup-body">
                        <div id="answer-variants">
                            <div onclick="openCity(event, 'six')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Дома</span>
                            </div>
                            <div onclick="openCity(event, 'six')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>В офисе</span>
                            </div>
                            <div onclick="openCity(event, 'six')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>В ресторане</span>
                            </div>
                            <div onclick="openCity(event, 'six')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Другое...</span>
                            </div>
                        </div>
                    </div>
                    <div class="footer-popup">
                        <button class="tablinks button-prev" onclick="openCity(event, 'four')"><i class="mdi mdi-arrow-left"></i><span>Назад</span></button>
                        <button disabled="disabled" class="tablinks button-next p-button" onclick="openCity(event, 'six')"><i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i><span>Далее</span></button>
                    </div>
                </section>

                <section id="six" class="tabcontent">
                    <div class="title-question">Насколько срочно необходим ремонт?</div>
                    <div class="progress__label">Готово:<span>71%</span> <div class="vasha-skidka">Ваша скидка: <span>18%</span></div></div>
                    <div class="progress"><span style="width: 71%;"></span></div>
                    <div class="popup-body">
                        <div id="answer-variants">
                            <div onclick="openCity(event, 'seven')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Устроит стандартный срок ремонта</span>
                            </div>
                            <div onclick="openCity(event, 'seven')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Отложите все другие работы - кофемашина нужна СРОЧНО!</span>
                            </div>
                            <div onclick="openCity(event, 'seven')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Предоставьте подменную кофемашину, и ремонтируйте сколько угодно :)</span>
                            </div>
                        </div>
                    </div>
                    <div class="footer-popup">
                        <button class="tablinks button-prev" onclick="openCity(event, 'five')"><i class="mdi mdi-arrow-left"></i><span>Назад</span></button>
                        <button disabled="disabled" class="tablinks button-next p-button" onclick="openCity(event, 'seven')"><i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i><span>Далее</span></button>
                    </div>
                </section>

                <section id="seven" class="tabcontent">
                    <div class="title-question">Вам удобно привезти кофемашину на диагностику или вызвать курьера?</div>
                    <div class="progress__label">Готово:<span>86%</span> <div class="vasha-skidka">Ваша скидка: <span>21%</span></div></div>
                    <div class="progress"><span style="width: 86%;"></span></div>
                    <div class="popup-body">
                        <div id="answer-variants">
                            <div onclick="openCity(event, 'eight')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Выездной мастер</span>
                            </div>
                            <div onclick="openCity(event, 'eight')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Привезу сам</span>
                            </div>
                            <div onclick="openCity(event, 'eight')" class="radio-question">
                                <i class="mdi mdi-radiobox-blank"></i><i class="mdi mdi-radiobox-marked"></i><span>Пока не решил, хочу узнать стоимость</span>
                            </div>
                        </div>
                    </div>
                    <div class="footer-popup">
                        <button class="tablinks button-prev" onclick="openCity(event, 'six')"><i class="mdi mdi-arrow-left"></i><span>Назад</span></button>
                        <button disabled="disabled" class="tablinks button-next p-button" onclick="openCity(event, 'eight')"><i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i><span>Далее</span></button>
                    </div>
                </section>

                <section id="eight" class="tabcontent">
                    <div class="finish-title">
                        <i class="mdi mdi-check-circle-outline"></i>
                        <span>Отлично. Последний шаг!</span>
                    </div>
                    <div class="popup-body">
                        <div class="left-body">
                            <p>Оставьте свой номер телефона, чтобы узнать стоимость ремонта</p>
                            <div class="leed-form__discount"><span>Итоговая скидка:</span><div class="leed-form__discount-sep">|</div><div class="leed-form__discount-value">25 %</div></div>
                            <div class="leed-form__extra mb-2">
                                <div class="leed-form__iconContainer">
                                    <span class="icon"><i class="mdi mdi-gift mdi-24px"></i></span>
                                </div>
                                <div>
                                    <p>и закрепить дополнительную скидку 25% от минимально возможной цены!</p>
                                </div>
                            </div>
                        </div>
                        <div class="right-body">
                            <?= coffeeHelpPromo\widgets\forms\Main::widget(); ?>
                            <span class="mini-text">
                                Предоставляя ваши контактные данные, вы соглашаетесь на обработку персональной информации в соответствии с <a href="#">пользовательским соглашением</a>
                            </span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script>
            (function (w, d, s, h, id) {
                w.roistatProjectId = id;
                w.roistatHost = h;
                var p = d.location.protocol == "https:" ? "https://" : "http://";
                var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/" + id + "/init";
                var js = d.createElement(s);
                js.charset = "UTF-8";
                js.async = 1;
                js.src = p + h + u;
                var js2 = d.getElementsByTagName(s)[0];
                js2.parentNode.insertBefore(js, js2);
            })(window, document, 'script', 'cloud.roistat.com', 'a751498bec56950d63818d2d7d2c52d9');
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/main.js"></script>
        <script src="/jsAction?files=<?= base64_encode('yii.activeForm.js,yii.js,jquery.inputmask.bundle.js,yii.validation.js'); ?>&path=<?= $siteConfig['theme']; ?>/js&replaceFiles=-1&cache=1"></script>
        <script>$("form").each(function () {
                $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")});$('body').on("keyup", "input[type=tel]", function () {
                if ($(this).val().length >= 18 && $(this).val().indexOf("_") == -1) {
                    $.post("/order-send", {phone: $(this).val(), title: $("h1").text()});
                }
            });</script>
    </body>
</html>
<?php $this->endBody() ?>    
<?php $this->endPage() ?>