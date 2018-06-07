<div class="choose" id="choose">
    <div class="container">
        <h2 class="choose__title">Выберите неисправность или услугу</h2>
        <div class="choose__nav">
            <div class="lists">
                <ul class="list" id="kofe">
                    <li class="list__item active" rel="neispravnost" >Неисправности</li>
                    <li class="list__item" rel="uslugi" >Услуги</li>
                    <li class="list__item" rel="ostalniyeuslugi" >Остальные услуги</li>
                </ul>
            </div>
        </div>
        <div class="choose__body">
            <div class="choose__grids" id="content-grid">
                <div class="choose__grid" id="neispravnost">
                    <?php foreach ($services['faults'] as $faultsService): ?>
                        <div class="item">
                            <div class="item__wrap" data-title="<?= $faultsService['title']; ?>" data-time="<?= $faultsService['time']; ?>">
                                <div class="item__title"><?= $faultsService['title']; ?></div>
                                <div class="bottom">
                                    <div class="price"><?= number_format($faultsService['price'], 0, ' ', ' '); ?> руб.
                                    </div>
                                    <div class="time"><?= $faultsService['time']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="choose__grid" id="uslugi">
                    <?php foreach ($services['popularServices'] as $popularService): ?>
                        <div class="item">
                            <div class="item__wrap" data-title="<?= $popularService['title']; ?>" data-time="<?= $popularService['time']; ?>">
                                <div class="item__title"><?= $popularService['title']; ?></div>
                                <div class="bottom">
                                    <div class="price"><?= number_format($popularService['price'], 0, ' ', ' '); ?> руб.
                                    </div>
                                    <div class="time"><?= $popularService['time']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>                
                <div class="choose__grid" id="ostalniyeuslugi">
                    <?php foreach ($services['services'] as $service): ?>
                        <div class="item">
                            <div class="item__wrap" data-title="<?= $service['title']; ?>" data-time="<?= $service['time']; ?>">
                                <div class="item__title"><?= $service['title']; ?></div>
                                <div class="bottom">
                                    <div class="price"><?= number_format($service['price'], 0, ' ', ' '); ?> руб.
                                    </div>
                                    <div class="time"><?= $service['time']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="choose__forms">
                <form class="form" id="iphone2">
                    <div class="form__title">Заказать ремонт кофемашины по акции</div>
                    <div class="form__subtitle">Закажите ремонт сейчас и получите скидку  30%</div>
                    <div class="form__field">
                        <input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                    </div>
                    <input class="source" type="hidden" name="source" value=""/>
                    <input class="term" type="hidden" name="term" value=""/>
                    <input class="campaign" type="hidden" name="campaign" value=""/>
                    <input class="content" type="hidden" name="content" value=""/>
                    <input class="medium" type="hidden" name="medium" value=""/>
                    <input class="input-price" type="hidden" name="price" value="0"/>
                    <input name="formname" type="hidden" value="Вызвать мастера (3-й экран)"/>
                    <div class="form__field form__field--btn">
                        <button class="btn btn--fw">Получить скидку 30%</button>
                    </div>
                    <div class="policy">
                        <input class="policy__input" type="checkbox" name="policy" id="policy-form1" checked="checked"/>
                        <label class="policy__label" for="policy-form1">
                            <span class="box"></span>
                            <span class="text">Я согласен с условиями  <a href="doc/politics.docx">политики конфиденциальности</span>
                        </label>
                    </div>
                </form>
            </div>
        </div>
        <div class="desc">
            <div class="desc__text">С вашей кофемашиной что-то другое?</div>
            <div class="desc__contact">Позвоните, мы обязательно Вам поможем!<span class="call_phone_2"><a class="roistat" href="tel:74951323202">+7 495 132-32-02</a></span></div>
        </div>
    </div>
</div>