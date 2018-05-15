<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
$c = count($rows);
?>
<div class=faults>
    <div class=container>
        <h3>Выберите неисправность</h3>
        <div class="faults__wrapper no-gutters row">
            <div class="col-lg-6 col-md-12">
                <a class="faults__item item-first" href=http://delonghi.kofemashini.com/fault-error/>
                <div class=faults__item-name> Выдает ошибку </div>
                <div class=faults__item-desc>
                    <div class=list-item>Чистка с разбором кофемашины</div>
                    <div class=list-item>Настройка и программирование</div>
                    <div class=list-item>Замена модуля управления</div>
                    <div class=list-item>Замена датчика термоблока</div>
                    <div class=list-item>Замена датчика пароблока</div>
                </div>
                <div class=faults__item-prices>
                    <div class=price>от 300 р.</div>
                    <div class=old-price>от 750 р.</div>
                </div>
                </a>
            </div>
            <?php foreach ($rows as $key => $row): ?>
                <div class="col-lg-3 col-md-6">
                    <a class=faults__item href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"/>
                    <div class=faults__item-name><?= $row['title']; ?></div>
                    <div class=faults__item-desc>
                        <div class=list-item>Ремонт блока управления</div>
                        <div class=list-item>Замена сетевого шнура</div>
                        <div class=list-item>Чистка от кофейных масел</div>
                        <div class=list-item>Чистка диспенсеров</div>
                        <div class=list-item>Ремонт гидросистемы</div>
                    </div>
                    <div class=faults__item-prices>
                        <div class=price>от 490 р.</div>
                        <div class=old-price></div>
                    </div>
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="col-lg-6 col-md-12">
                <div class=faults__callback>
                    <div class=faults__callback-heading>Остались вопросы?</div>
                    <div class="faults__callback-desc mt-4">
                        <p>Оставьте заявку, и наш оператор перезвонит Вам через 2 минуты. 
                    </div>
                    <form action=http://delonghi.kofemashini.com/order.php class="faults__callback-form form-order mt-4" method=post>
                        <div class=form-group><input class=form-control name=phone placeholder="Номер телефона *" required type=tel> </div> 
                        <button class="btn btn-block btn-primary" type=submit>Перезвоните мне</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>