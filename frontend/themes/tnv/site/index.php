<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : 'Ремонт кофемашин в ' . Yii::$app->session['region']['titleRod'] . ' ☕️ Низкие цены ✔️ Официальная гарантия 📃';
?>
<div class='parent'>
    <div class='slider'>
        <button type="button" id='right' class='right' name="button">
            <svg version="1.1" id="Capa_1" width='40px' height='40px ' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                <g>
                    <path style='fill: #fff;' d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                          c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
                          "/>
                </g>
            </svg>
        </button>
        <button type="button" id='left' class='left' name="button">
            <svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                <g>
                    <path style='fill: #fff;' d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                          c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                </g>
            </svg>
        </button>
        <svg id='svg2' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <circle id='circle1' class='circle1 steap' cx="5%" cy="49%" r="20"  />
            <circle id='circle2' class='circle2 steap' cx="5%" cy="49%" r="100"  />
            <circle id='circle3' class='circle3 steap' cx="5%" cy="49%" r="180"  />
            <circle id='circle4' class='circle4 steap' cx="5%" cy="49%" r="260"  />
            <circle id='circle5' class='circle5 steap' cx="5%" cy="49%" r="340"  />
            <circle id='circle6' class='circle6 steap' cx="5%" cy="49%" r="420"  />
            <circle id='circle7' class='circle7 steap' cx="5%" cy="49%" r="500"  />
            <circle id='circle8' class='circle8 steap' cx="5%" cy="49%" r="580"  />
            <circle id='circle9' class='circle9 steap' cx="5%" cy="49%" r="660"  />
        </svg>
        <svg id='svg1' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <circle id='circle10' class='circle10 steap' cx="20%" cy="49%" r="20"  />
            <circle id='circle11' class='circle11 steap' cx="20%" cy="49%" r="100"  />
            <circle id='circle12' class='circle12 steap' cx="20%" cy="49%" r="180"  />
            <circle id='circle13' class='circle13 steap' cx="20%" cy="49%" r="260"  />
            <circle id='circle14' class='circle14 steap' cx="20%" cy="49%" r="340"  />
            <circle id='circle15' class='circle15 steap' cx="20%" cy="49%" r="420"  />
            <circle id='circle16' class='circle16 steap' cx="20%" cy="49%" r="500"  />
            <circle id='circle17' class='circle17 steap' cx="20%" cy="49%" r="580"  />
            <circle id='circle18' class='circle18 steap' cx="20%" cy="49%" r="660"  />
        </svg>
        <div id="slide1" class="slide1">
            <h1><?= !empty($page['meta_h1']) ? $page['meta_h1'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
            <?= $page['description']; ?>
        </div>
        <div id="slide2" class="slide2">
            <h2>ReKofe - Больше, чем просто сервисный центр</h2>
            <p>Сервисный центр на протяжении 10 лет выполняет ремонт кофемашин и занимается их обслуживанием с гарантированным качеством. Инженеры нашего сервисного центра разработали собственные методики, благодаря которым - ремонт кофемашин выполняется в максимально короткие сроки.</p>
        </div>
        <div id="slide3" class="slide3">
            <h2>Доверяйте профессионалам!</h2>
            <p>В штате нашей компании работают лишь первоклассные специалисты, которые ежегодно проходят курсы повышения квалификации. Все сотрудники нашего предприятия с должной ответственностью относятся к ремонту кофемашин и выполняют ремонт точно в срок.</p>
        </div>
        <div id="slide4" class="slide4">
            <h2>Мы ремонтируем их, чтобы они радовали Вас!</h2>
            <p>Собственные методики и индивидуальный подход к каждому клиенту - позволяют максимально снизить ожидание завершения ремонта. Данные методики были разработаны нашими инженерами и успешно применяются на практике в течении уже более 10 лет.</p>
        </div>

    </div>
</div>
<?= tnv\widgets\forms\MainPageForm::widget(); ?>
<?= tnv\widgets\lists\TopServices::widget(); ?>
<?= tnv\widgets\other\Advantage::widget(); ?>
<?= tnv\widgets\lists\PopularServices::widget(); ?>
<div class="aside-layout container mb166">
    <div class="row sticky-parent">        
        <div class="page col-xs-12 col-md-12">
            <div data-flatr="webpage 46">                
                <div class="richtext ">
                    <?= $page['full_description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= tnv\widgets\lists\PopularBrands::widget(); ?>
<?= tnv\widgets\other\Masters::widget(); ?>
<?= tnv\widgets\lists\PopularModels::widget(); ?>
<?= tnv\widgets\other\Remont::widget(); ?>
<?= tnv\widgets\lists\LastReviews::widget(); ?>
<?= tnv\widgets\lists\LastNews::widget(); ?>
