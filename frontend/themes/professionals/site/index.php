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
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 6, 'title' => 'Частые неисправности', 'is_popular' => true, 'type' => 2]); ?>
<?= professionals\widgets\lists\PopularBrands::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Популярные услуги', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>