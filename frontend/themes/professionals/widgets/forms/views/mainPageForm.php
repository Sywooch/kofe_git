<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-13 col-sm-18">
                <div class="hero_order">
                    <h1 class="title title__1 light title__home <?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'spb_h' : 'msk_h' ?>"><?= $pageInfo; ?></h1>
                    <div class="subtitle" style="margin-top: 20px; font-size: 14px; color: #bfa16a">В сервисном центре</div>
                    <div class="form form__inline form-block__repair form-block__light">
                        <p class="subtitle">Хотите подарок? Введите Ваш номер телефона и получите его!</p>
                        <?php

                        use yii\helpers\Html;
                        use yii\widgets\ActiveForm;
                        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
    'action' => 'site/validate',
                                    'id' => 'today-form',
                                    'options' => ['class' => 'request-form'],
                                    'enableAjaxValidation' => true,
                                    'fieldConfig' => [
                                        'template' => '{input}',
                                    ],
                        ]);
                        ?>
                        <ul>
                            <li>
                                <label for="id_phone">Телефон</label>
                                <?=
                                $form->field($model, 'phone')->widget(MaskedInput::className(), [
                                    'name' => 'phone',
                                    'mask' => '+7 (999) 999-99-99',
                                    'options' => [
                                        'placeholder' => 'Введите телефон',
                                        //'class' => 'form__input form__input_phone-mask',
                                        'type' => 'tel',
                                        'size' => 40,
                                    ],
                                ])->label('')
                                ?>
                            </li>
                        </ul>
                        <button type="submit">Выбрать подарок</button>
                        <?php ActiveForm::end() ?>
                        <div class="gift">
                            <div class="gifts"><img src="" alt=""></div>
                            <div class="gifts"><img src="" alt=""></div>
                            <div class="gifts"><img src="" alt=""></div>
                        </div>
                        <p class="form-policy">
                            Нажимая на кнопку «Перезвоните мне», вы подтверждаете своё совершеннолетие и соглашаетесь на обработку
                            персональных данных в соответствии с <a href="/conf-inform">условиями</a>.
                        </p>
                    </div>
                </div>
            </div>
            <?php if (!empty($page)): ?>
                <div class="col-lg-12 col-md-10 col-md-offset-1 col-sm-24" style="position: relative;">
                    <div class="row">
                        <div class="col-lg-24 hero_why-we">
                            <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $page['description']); ?>     
                        </div>
                        <div class="cup">
                            <?php if (!empty($page['image'])): ?>
                                <img class="brend-img" src="/uploads/images/<?= $page['image']; ?>" alt="<?= $page['title']; ?>"/>
                            <?php endif; ?>  
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/bg/cup.png" alt="">
                        </div>
                    </div>

                </div>
            <?php else: ?>
                <div class="col-lg-8 col-lg-offset-5 col-md-10 col-md-offset-1 hidden-sm hidden-xs" style="position: relative;">
                    <div class="hero_statement">
                        <blockquote data-timeout="2800">
                            <p>Ремонт для нас - как <br>кислород для Вас!</p>
                            <span class="hero_cite">Мастер Олег</span>
                        </blockquote>
                        <blockquote data-timeout="2800">
                            <p>У вас страсть к кофе, а у нас <br>к ремонту кофемашин!</p>
                            <span class="hero_cite">Мастер Илья</span>
                        </blockquote>
                        <blockquote data-timeout="2800">
                            <p>Ничто так не бодрит с утра, как ремонт кофемашины!</p>
                            <span class="hero_cite">Мастер Игорь</span>
                        </blockquote>
                        <blockquote data-timeout="2800">
                            <p>Мы не делаем из мухи слона - <br>мы делаем кофемашины!</p>
                            <span class="hero_cite">Мастер Андрей</span>
                        </blockquote>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--<div id="canvas-cont">
    <canvas class="waterwave-canvas"></canvas>
</div>-->