<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : app\components\CController::$category['full_title'] . ' ' . \app\components\CController::$monoBrand['title'] . ' в Москве срочно и по лучшим ценам!';
?>
<section class="slider">
    <div class="container slider-container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div id="slider-main" class="owl-carousel owl-theme">
                    <div class="slider-item"><img src="<?= $assets . $siteConfig['theme']; ?>/images/slide2.png" width="760" height="490" alt="Любая работа за 990"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <form action="#" class="slider-form js-feedback-form">
                    <input type="hidden" name="feedback[subject]" value="Заявка на ремонт">
                    <input type="hidden" name="feedback[content]" value="Пусто">
                    <p class="slider-form--title">Закажите ремонт кофемашины прямо сейчас - </p>
                    <p class="slider-form--description">и получите скидку до 50%! А так же выполним комплексное обслуживание совершенно БЕСПЛАТНО!</span></p>
                    <input type="tel" placeholder="Ваш телефон" class="input--block" name="feedback[phone]">
                    <button type="submit" class="button button--yellow js-privacy-button">Получить скидку</button>
                    <p><input type="checkbox" id="privacy_checkbox" class="js-privacy-toggle" checked required><label for="privacy_checkbox">Я согласен с <a href="#" target="_blank">правилами обработки персональных данных</a></label></p>
                </form>
            </div>
        </div>
        <div class="owl-dots slider-dots"></div>
    </div>
    <i class="slider-background slider-background--left js-background-pattern"></i>
    <i class="slider-background slider-background--right js-background-pattern"></i>
</section>
<div class="container">
    <section class="benefits">
        <p class="section-title">Почему именно мы?</p>
        <ul class="benefits-items">
            <li class="benefits-item">
                <span class="benefits-item--thumb"><img src="<?= $assets . $siteConfig['theme']; ?>/images/icons/benefit1.png" alt="Работаем в Москве" height="54" class="benefits-item--image"></span>
                <p class="benefits-item--description">Работаем по ВСЕЙ Москве и ближайшему Подмосковью</p>
            </li>
            <li class="benefits-item">
                <span class="benefits-item--thumb"><img src="<?= $assets . $siteConfig['theme']; ?>/images/icons/benefit2.png" alt="Выезд день в день" height="54" class="benefits-item--image"></span>
                <p class="benefits-item--description">Бесплатная доставка кофемашины в СЦ и обратно</p>
            </li>
            <li class="benefits-item">
                <span class="benefits-item--thumb"><img src="<?= $assets . $siteConfig['theme']; ?>/images/icons/benefit3.png" alt="Ремонт при Вас" height="54" class="benefits-item--image"></span>
                <p class="benefits-item--description">Проводим ремонт кофемашины не дольше 18 часов</p>
            </li>
            <li class="benefits-item">
                <span class="benefits-item--thumb"><img src="<?= $assets . $siteConfig['theme']; ?>/images/icons/benefit4.png" alt="Оригинальные запчасти" height="54" class="benefits-item--image"></span>
                <p class="benefits-item--description">Используем только оригинальные комплектующие</p>
            </li>
            <li class="benefits-item">
                <span class="benefits-item--thumb"><img src="<?= $assets . $siteConfig['theme']; ?>/images/icons/benefit5.png" alt="3 года гарантии" height="54" class="benefits-item--image"></span>
                <p class="benefits-item--description">Выдаём официальную гарантию сервисного центра до 1 года</p>
            </li>
        </ul>
    </section>
    <section class="services">
        <p class="section-title">Популярные неисправности кофемашин:</p>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="services-item">
                    <a href="#" class="services-item--thumb" style="background-image: url(http://saeco.service-center.pro/uploads/images/remont-kofemashin-saeco-profi-gastro-ii.jpg);"></a>
                    <p class="services-item--title"><a href="#">Нет питания</a></p>
                    <p class="services-item--price">от <span>500&nbsp;руб</span></p>
                    <a href="#" class="button button--yellow">Вызвать мастера</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="services-item">
                    <a href="#" class="services-item--thumb" style="background-image: url(http://saeco.service-center.pro/uploads/images/remont-kofemashin-saeco-profi-gastro-ii.jpg);"></a>
                    <p class="services-item--title"><a href="#">Нет питания</a></p>
                    <p class="services-item--price">от <span>500&nbsp;руб</span></p>
                    <a href="#" class="button button--yellow">Вызвать мастера</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="services-item">
                    <a href="#" class="services-item--thumb" style="background-image: url(http://saeco.service-center.pro/uploads/images/remont-kofemashin-saeco-profi-gastro-ii.jpg);"></a>
                    <p class="services-item--title"><a href="#">Нет питания</a></p>
                    <p class="services-item--price">от <span>500&nbsp;руб</span></p>
                    <a href="#" class="button button--yellow">Вызвать мастера</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="services-item">
                    <a href="#" class="services-item--thumb" style="background-image: url(http://saeco.service-center.pro/uploads/images/remont-kofemashin-saeco-profi-gastro-ii.jpg);"></a>
                    <p class="services-item--title"><a href="#">Нет питания</a></p>
                    <p class="services-item--price">от <span>500&nbsp;руб</span></p>
                    <a href="#" class="button button--yellow">Вызвать мастера</a>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="background--grey margin--bottom60">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-12">
                <section class="reviews">
                    <p class="section-title">Отзывы</p>
                    <div id="slider-reviews" class="owl-carousel owl-theme">
                        <div class="reviews-item">
                            <div class="reviews-item--shade">
                                <div class="reviews-item--title">
                                    <img src="<?= $assets . $siteConfig['theme']; ?>/images/icons/user-empty.png" alt="Валентин" class="reviews-item--image" width="55" height="55">
                                    <span class="reviews-item--author">Валентин</span>
                                    <span class="reviews-item--date">28.03.2018</span>
                                </div>
                                <div class="reviews-item--content">
                                    <p><span>Все очень понравилось. Мастер приехал точно по времени как договаривались. Сумму заплатил ту, о которой было обгорено. Всем рекомендую!! Спасибо.</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-item">
                            <div class="reviews-item--shade">
                                <div class="reviews-item--title">
                                    <img src="<?= $assets . $siteConfig['theme']; ?>/images/icons/user-empty.png" alt="Валентин" class="reviews-item--image" width="55" height="55">
                                    <span class="reviews-item--author">Евгений</span>
                                    <span class="reviews-item--date">27.03.2018</span>
                                </div>
                                <div class="reviews-item--content">
                                    <p><span>Большое спасибо! Починили динамик и еще в подарок наклеил пленку девушке на 6 айфон! Супер!</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="reviews-item--all"><a href="#">Все отзывы</a></p>
                </section>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12">
                <form action="#" class="slider-form js-feedback-form b-v">
                    <input type="hidden" name="feedback[subject]" value="Заявка на ремонт">
                    <input type="hidden" name="feedback[content]" value="Пусто">
                    <p class="slider-form--title">Закажите ремонт кофемашины прямо сейчас - </p>
                    <p class="slider-form--description">и получите скидку до 50%! А так же выполним комплексное обслуживание совершенно БЕСПЛАТНО!</p>
                    <input type="tel" placeholder="Ваш телефон" class="input--block" name="feedback[phone]" autocomplete="off">
                    <button type="submit" class="button button--yellow js-privacy-button">Получить скидку</button>
                    <p><input type="checkbox" id="privacy_checkbox" class="js-privacy-toggle" checked="" required=""><label for="privacy_checkbox">Я согласен с <a href="#" target="_blank">правилами обработки персональных данных</a></label></p>
                </form>
            </div>
        </div>
    </div>
    <i class="background-pattern background-pattern--left background-center background-center--left js-background-pattern"></i>
    <i class="background-pattern background-pattern--right background-center background-center--right js-background-pattern"></i>
</div>
<div class="container">
    <section class="mainpage-text">
        <div class="content">
            <div class="content">
                <h2>Контентная часть</h2>
                <p>Поломка смартфона или планшета &ndash; проблема, требующая быстрого решения. Сервисный центр &laquo;СправникЪ&raquo; предоставляет оптовые цены на все запчасти, а также оказывает услуги по выездному ремонту Apple в Москве. С нами вам не придется тратить время на поиск нужных деталей или поездку в сервис. Просто позвоните нам и опишите проблему &ndash; мастера приедут в удобное для вас место, проведут диагностические и ремонтные работы.</p>
                <h2>Наши услуги</h2>
                <p><b>Точная диагностика. </b>Диагностику поломок осуществляют квалифицированные специалисты, имеющие большой опыт работы с техникой Эпл. В 95 % случаев это удается сделать на месте, без транспортировки гаджета в лабораторию.</p>
                <p><b>Поставка надежных запчастей. </b>Оптовая продажа запчастей &ndash; основное направление нашей деятельности. В нашем ассортименте представлены как оригинальные детали, так и аналоги. Как крупный и надежный поставщик, мы постоянно контролируем их качество и работоспособность. Отправляясь на вызов, мастера могут взять с собой оба комплекта &ndash; просто попросите об этом оператора.</p>
                <p><b>Оперативный ремонт. </b>Ремонт техники Apple осуществляется в максимально короткие сроки. Специалисты нашего официального сервиса с необходимым набором запчастей находятся в разных точках столицы, что позволяет им быстро добраться до клиента. В большинстве случаев ремонт выполняется на месте, и это занимает не более 15 минут. В очень редких ситуациях приходится забирать телефон в офис.</p>
                <h2>Наши преимущества</h2>
                <p><b>Удобный режим работы. </b>Заявки в Москве на ремонт техники Apple принимаются с понедельника по субботу с 10:00 до 19:00. Просто свяжитесь с оператором по контактному номеру или воспользуйтесь функцией &laquo;Перезвоните мне&raquo;.</p>
                <p><b>Разумные цены. </b>Мы делаем стоимость услуг доступной широкому кругу клиентов. Ценник ремонта Эпл в Москве у нас согласовывается до начала работ и не меняется после их окончания. Вы платите только за запчасть и ее установку (990 рублей).</p>
                <p><b>Опыт и профессионализм. </b>Наши специалисты &ndash; наша гордость. Это опытные мастера, постоянно повышающие свою квалификацию и активно применяющие современные технологии в своей работе. Вы можете не бояться доверить им свой Айфон или другую технику.</p>
                <p><b>Наличие гарантии. </b>Мы являемся официальным сервисом по ремонту Айфонов и другой техники и предоставляем гарантию на различные виды работ и запчасти сроком до 3 лет.</p>
                <p>Хотите получить высокое качество ремонта без больших финансовых и временных затрат? &laquo;СправникЪ&raquo; может предложить то, что вам нужно!</p>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <ul class="about-menu">
                    <li class="about-menu-item">
                        <span class="about-menu-item--toggle js-block-toggle active" data-object="about" data-target="about_spravnik">СправникЪ</span>
                        <div class="about-content-item-inner about-content-item-inner--toggle hidden-lg hidden-md" id="inner-about_spravnik">
                            <div class="content">
                                <p>Выездной сервис по ремонту техники в любом удобном для Вас месте! Приедем в любое место Москвы и Московской области! Больше нет необходимости тратить время на поездки в сервис. Наши квалифицированные мастера выполнят ремонт в удобном для Вас месте. Сервисный центр осуществляет качественно, оперативно ремонт техники Apple по доступным ценам.</p>
                                <p>Наши клиенты по достоинству оценили деятельность сервисного центра "СправникЪ", и выбирают его по следующим причинам:</p>
                                <p><span style="color: #0d0d0d;">Диагностика и выезд оплачиваются отдельно при сумме заказа менее 1 500 рублей. </span><br /><span style="color: #0d0d0d;">Диагностика = 500 руб., выезд специалиста = 300 руб.</span></p>
                                <p>Обращайтесь. Всегда готовы оказать профессиональную помощь. Сделаем все возможное, чтобы Вы остались довольны нашей работой, и получили только позитивные эмоции.</p>
                                <p><strong>Доверьте ремонт профессионалам!</strong><br /><strong>Скорее звоните: 8 (495) 118-25-98, или пишите: remont@spravnik.ru.</strong><br /><strong>Мы Вам поможем!</strong></p>
                            </div>
                        </div>
                    </li>
                    <li class="about-menu-item">
                        <span class="about-menu-item--toggle js-block-toggle" data-object="about" data-target="about_operativnyy-remont">Оперативный ремонт</span>
                        <div class="about-content-item-inner about-content-item-inner--toggle hidden-lg hidden-md" id="inner-about_operativnyy-remont">
                            <div class="content">
                                <p>Забудьте о поисках сервисного центра! Починить ваш iphone можно не выходя из дома в самые кротчайшие сроки. Как мы это делаем:</p>
                                <ol>
                                    <li>На звонки отвечает отдельный человек, принимающий заказы. Скорость реакции на вашу заявку не более минуты, наша система контроля качества постоянно контролирует этот момент.</li>
                                    <li>Наши мастера находятся в различных точках Москвы, имея при себе комплект запчастей для ремонта, наша автоматическая система распределения позволяет назначать мастера, который может добраться до вас в самые короткие сроки.</li>
                                    <li>Большая часть видов ремонта занимают около 15 минут времени, лишь в редких случаях аппарат приходится забирать в офис.</li>
                                </ol>
                            </div>
                        </div>
                    </li>
                    <li class="about-menu-item">
                        <span class="about-menu-item--toggle js-block-toggle" data-object="about" data-target="about_originalnye-nadyozhnye-zapchasti">Оригинальные надёжные запчасти</span>
                        <div class="about-content-item-inner about-content-item-inner--toggle hidden-lg hidden-md" id="inner-about_originalnye-nadyozhnye-zapchasti">
                            <div class="content">
                                <p>Основное направление деятельности компании &ndash; оптовая продажа запчастей, что является нашим самым главным преимуществом перед другими сервисными центрами. Мы обладаем гораздо большей экспертизой в этом направлении, и у нас всегда в наличии в большом количестве как оригинальные детали, так и высококачественные аналоги. При оформлении ремонта вы можете попросить оператора, чтобы у мастера при себе были оба варианта запчасти, чтобы на месте сравнить разницу и принять решение.</p>
                            </div>
                        </div>
                    </li>
                    <li class="about-menu-item">
                        <span class="about-menu-item--toggle js-block-toggle" data-object="about" data-target="about_professionalnaya-diagnostika">Профессиональная диагностика</span>
                        <div class="about-content-item-inner about-content-item-inner--toggle hidden-lg hidden-md" id="inner-about_professionalnaya-diagnostika">
                            <div class="content">
                                <p>В 95% случаев диагностика проводится на месте в вашем присутствии, лишь в небольшом количестве поломок требуется диагностика в лаборатории. Данная диагностика проводится с применением специального современного оборудования, позволяющего установить проблему с высочайшей точностью, и соответственно привести в рабочее состояние вас аппарат в самые сжатые сроки.</p>
                                <p>Диагностика проводится бесплатно при условии дальнейшего ремонта в нашем сервисном центре.</p>
                            </div>
                        </div>
                    </li>
                    <li class="about-menu-item">
                        <span class="about-menu-item--toggle js-block-toggle" data-object="about" data-target="about_kachestvo">Качество</span>
                        <div class="about-content-item-inner about-content-item-inner--toggle hidden-lg hidden-md" id="inner-about_kachestvo">
                            <div class="content">
                                <p>Все детали на нашем складе проходят обязательную проверку отделом контроля качества, а мастера обладают опытом ремонта техники того вида, что необходим вам, от 2 лет. Именно это позволяет нам давать самую большую на рынке гарантию &ndash; до 36 месяцев.</p>
                                <p>Кроме того в нашем сервисном центре не более 1% процента заявок приходятся на гарантийные обращения, что говорит о высоком качестве ремонта в целом.</p>
                            </div>
                        </div>
                    </li>
                    <li class="about-menu-item">
                        <span class="about-menu-item--toggle js-block-toggle" data-object="about" data-target="about_vysokokvalifitsirovannye-spetsialisty">Высококвалифицированные специалисты</span>
                        <div class="about-content-item-inner about-content-item-inner--toggle hidden-lg hidden-md" id="inner-about_vysokokvalifitsirovannye-spetsialisty">
                            <div class="content">
                                <p>Наши сотрудники &ndash; без преувеличения наша гордость. В сервисном центре "СправникЪ"&nbsp;ремонт техники Apple выполняют сертифицированные мастера с многолетним стажем, которые прошли специальное обучение, а также используют в работе инновационные технологии. Доверив нам свою технику, гарантируем, что она попадет в руки настоящих профессионалов своего дела. Ремонт будет качественным, профессиональным и быстрым.</p>
                                <p>В разделе &laquo;Блог&raquo; вы можете найти советы наших мастеров по эксплуатации техники apple и другую полезную информацию. Также мы всегда готовы ответить на ваши вопросы любым удобным для вас способом!</p>
                            </div>
                        </div>
                    </li>
                    <li class="about-menu-item">
                        <span class="about-menu-item--toggle js-block-toggle" data-object="about" data-target="about_sovremennoe-oborudovanie">Современное оборудование</span>
                        <div class="about-content-item-inner about-content-item-inner--toggle hidden-lg hidden-md" id="inner-about_sovremennoe-oborudovanie">
                            <div class="content">
                                <p>Ремонтные работы производятся с использованием фирменного оборудования, что позволяет быстро устранить любую неисправность. Также наше современное оборудование помогает провести замену микросхемы на плате вместо замены комплекта, что позволяет сильно снизить стоимость услуги!</p>
                            </div>
                        </div>
                    </li>
                    <li class="about-menu-item">
                        <span class="about-menu-item--toggle js-block-toggle" data-object="about" data-target="about_ofitsialnaya-garantiya">Официальная гарантия</span>
                        <div class="about-content-item-inner about-content-item-inner--toggle hidden-lg hidden-md" id="inner-about_ofitsialnaya-garantiya">
                            <div class="content">
                                <p>На все работы, выполненные мастерами, мы предоставляем рекордную гарантию до 3 лет! Так что, отремонтировав телефон у нас, вы можете быть абсолютно спокойны за дальнейшее использование устройства. Срок гарантии зависит от запчастей, которые использовались в процессе ремонта, сложности произведенных работ.</p>
                            </div>
                        </div>
                    </li>
                    <li class="about-menu-item">
                        <span class="about-menu-item--toggle js-block-toggle" data-object="about" data-target="about_dostupnye-tseny">Доступные цены</span>
                        <div class="about-content-item-inner about-content-item-inner--toggle hidden-lg hidden-md" id="inner-about_dostupnye-tseny">
                            <div class="content">
                                <p>Наше главное преимущество, способное вас приятно порадовать &ndash; это, конечно же, стоимость. Сделать цены максимально доступными нам позволяет то, что в первую очередь наша компания занимается оптовыми продажами запчастей сервисным центрам, а значит, при установке запчасти нами вы получаете ее по оптовой цене! Стоимость же самого ремонта в нашем сервисном центре фиксированная &ndash; 990 рублей за любую работу.</p>
                                <p>Итого вы получаете уникальное для рынка предложение:</p>
                                <p><strong>Деталь по оптовой цене + 990 рублей за ее установку</strong></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                <div class="about-content">
                    <div class="about-content-item about-content-item--toggle active" id="about_spravnik">
                        <div class="content">
                            <h2>СправникЪ</h2>
                            <p>Выездной сервис по ремонту техники в любом удобном для Вас месте! Приедем в любое место Москвы и Московской области! Больше нет необходимости тратить время на поездки в сервис. Наши квалифицированные мастера выполнят ремонт в удобном для Вас месте. Сервисный центр осуществляет качественно, оперативно ремонт техники Apple по доступным ценам.</p>
                            <p>Наши клиенты по достоинству оценили деятельность сервисного центра "СправникЪ", и выбирают его по следующим причинам:</p>
                            <p><span style="color: #0d0d0d;">Диагностика и выезд оплачиваются отдельно при сумме заказа менее 1 500 рублей. </span><br /><span style="color: #0d0d0d;">Диагностика = 500 руб., выезд специалиста = 300 руб.</span></p>
                            <p>Обращайтесь. Всегда готовы оказать профессиональную помощь. Сделаем все возможное, чтобы Вы остались довольны нашей работой, и получили только позитивные эмоции.</p>
                            <p><strong>Доверьте ремонт профессионалам!</strong><br /><strong>Скорее звоните: 8 (495) 118-25-98, или пишите: remont@spravnik.ru.</strong><br /><strong>Мы Вам поможем!</strong></p>
                        </div>
                    </div>
                    <div class="about-content-item about-content-item--toggle" id="about_operativnyy-remont">
                        <div class="content">
                            <h2>Оперативный ремонт</h2>
                            <p>Забудьте о поисках сервисного центра! Починить ваш iphone можно не выходя из дома в самые кротчайшие сроки. Как мы это делаем:</p>
                            <ol>
                                <li>На звонки отвечает отдельный человек, принимающий заказы. Скорость реакции на вашу заявку не более минуты, наша система контроля качества постоянно контролирует этот момент.</li>
                                <li>Наши мастера находятся в различных точках Москвы, имея при себе комплект запчастей для ремонта, наша автоматическая система распределения позволяет назначать мастера, который может добраться до вас в самые короткие сроки.</li>
                                <li>Большая часть видов ремонта занимают около 15 минут времени, лишь в редких случаях аппарат приходится забирать в офис.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="about-content-item about-content-item--toggle" id="about_originalnye-nadyozhnye-zapchasti">
                        <div class="content">
                            <h2>Оригинальные надёжные запчасти</h2>
                            <p>Основное направление деятельности компании &ndash; оптовая продажа запчастей, что является нашим самым главным преимуществом перед другими сервисными центрами. Мы обладаем гораздо большей экспертизой в этом направлении, и у нас всегда в наличии в большом количестве как оригинальные детали, так и высококачественные аналоги. При оформлении ремонта вы можете попросить оператора, чтобы у мастера при себе были оба варианта запчасти, чтобы на месте сравнить разницу и принять решение.</p>
                        </div>
                    </div>
                    <div class="about-content-item about-content-item--toggle" id="about_professionalnaya-diagnostika">
                        <div class="content">
                            <h2>Профессиональная диагностика</h2>
                            <p>В 95% случаев диагностика проводится на месте в вашем присутствии, лишь в небольшом количестве поломок требуется диагностика в лаборатории. Данная диагностика проводится с применением специального современного оборудования, позволяющего установить проблему с высочайшей точностью, и соответственно привести в рабочее состояние вас аппарат в самые сжатые сроки.</p>
                            <p>Диагностика проводится бесплатно при условии дальнейшего ремонта в нашем сервисном центре.</p>
                        </div>
                    </div>
                    <div class="about-content-item about-content-item--toggle" id="about_kachestvo">
                        <div class="content">
                            <h2>Качество</h2>
                            <p>Все детали на нашем складе проходят обязательную проверку отделом контроля качества, а мастера обладают опытом ремонта техники того вида, что необходим вам, от 2 лет. Именно это позволяет нам давать самую большую на рынке гарантию &ndash; до 36 месяцев.</p>
                            <p>Кроме того в нашем сервисном центре не более 1% процента заявок приходятся на гарантийные обращения, что говорит о высоком качестве ремонта в целом.</p>
                        </div>
                    </div>
                    <div class="about-content-item about-content-item--toggle" id="about_vysokokvalifitsirovannye-spetsialisty">
                        <div class="content">
                            <h2>Высококвалифицированные специалисты</h2>
                            <p>Наши сотрудники &ndash; без преувеличения наша гордость. В сервисном центре "СправникЪ"&nbsp;ремонт техники Apple выполняют сертифицированные мастера с многолетним стажем, которые прошли специальное обучение, а также используют в работе инновационные технологии. Доверив нам свою технику, гарантируем, что она попадет в руки настоящих профессионалов своего дела. Ремонт будет качественным, профессиональным и быстрым.</p>
                            <p>В разделе &laquo;Блог&raquo; вы можете найти советы наших мастеров по эксплуатации техники apple и другую полезную информацию. Также мы всегда готовы ответить на ваши вопросы любым удобным для вас способом!</p>
                        </div>
                    </div>
                    <div class="about-content-item about-content-item--toggle" id="about_sovremennoe-oborudovanie">
                        <div class="content">
                            <h2>Современное оборудование</h2>
                            <p>Ремонтные работы производятся с использованием фирменного оборудования, что позволяет быстро устранить любую неисправность. Также наше современное оборудование помогает провести замену микросхемы на плате вместо замены комплекта, что позволяет сильно снизить стоимость услуги!</p>
                        </div>
                    </div>
                    <div class="about-content-item about-content-item--toggle" id="about_ofitsialnaya-garantiya">
                        <div class="content">
                            <h2>Официальная гарантия</h2>
                            <p>На все работы, выполненные мастерами, мы предоставляем рекордную гарантию до 3 лет! Так что, отремонтировав телефон у нас, вы можете быть абсолютно спокойны за дальнейшее использование устройства. Срок гарантии зависит от запчастей, которые использовались в процессе ремонта, сложности произведенных работ.</p>
                        </div>
                    </div>
                    <div class="about-content-item about-content-item--toggle" id="about_dostupnye-tseny">
                        <div class="content">
                            <h2>Доступные цены</h2>
                            <p>Наше главное преимущество, способное вас приятно порадовать &ndash; это, конечно же, стоимость. Сделать цены максимально доступными нам позволяет то, что в первую очередь наша компания занимается оптовыми продажами запчастей сервисным центрам, а значит, при установке запчасти нами вы получаете ее по оптовой цене! Стоимость же самого ремонта в нашем сервисном центре фиксированная &ndash; 990 рублей за любую работу.</p>
                            <p>Итого вы получаете уникальное для рынка предложение:</p>
                            <p><strong>Деталь по оптовой цене + 990 рублей за ее установку</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="models">
        <p class="section-title">Другие модели Delonghi</p>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <a href="#" class="models-item">
                    <span class="models-item--thumb" style="background-image: url(http://saeco.service-center.pro/uploads/images/remont-kofemashin-saeco-profi-gastro-ii.jpg);"></span>
                    <p class="models-item--title">Кофемашина 1</p>
                </a>
            </div>
        </div>
    </section>
    <section class="partners-slider">
        <p class="section-title">Компании которые пользуются нашими услугами</p>
        <div id="slider-partners" class="owl-carousel owl-theme">
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/sbbenk.png" alt="Сбербанк" class="img-responsive"></a>
            </div>
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/Альфа_лого.png" alt="Альфа банк" class="img-responsive"></a>
            </div>
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/pwc_лого.jpg" alt="Pwc" class="img-responsive"></a>
            </div>
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/avl.jpg" alt="АВИЛОН. Официальный дилер MINI" class="img-responsive"></a>
            </div>
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/wnt.jpg" alt="Сервис WANT" class="img-responsive"></a>
            </div>
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/лого_2.png" alt="Карта рассрочки Совесть" class="img-responsive"></a>
            </div>
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/logo.jpg" alt="AudiClubMoscow" class="img-responsive"></a>
            </div>
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/smir.png" alt="Радио Славянский МирЪ" class="img-responsive"></a>
            </div>
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/virg.png" alt="Смайл, группа компаний Virgin Connect" class="img-responsive"></a>
            </div>
            <div class="slider-partners-item">
                <a href="#"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo/живая_сталь_лого.png" alt="Спортивный клуб &quot;Живая сталь&quot;" class="img-responsive"></a>
            </div>
        </div>
    </section>
</div>