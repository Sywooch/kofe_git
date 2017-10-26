<?php
$siteConfig = app\components\CController::getSiteConfig();
?>
<section id="ask-form">
    <div class="container">
        <div class="right">
            <?php if (!$siteConfig['mono']): ?>
                <img src="/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>master.png">
            <?php endif; ?>
            <?php if ($siteConfig['mono']): ?>
                <p class="title"><span>Специализируемся на ремонте <?= app\components\CController::$monoBrand['title']; ?></span></p>
                <p class="info">Оставьте онлайн заявку сейчас и получите бонус!</p>
            <?php else: ?>
                <p class="title"><span>Обращайтесь к профессионалам</span></p>
                <p class="info">Оставьте онлайн заявку сейчас <br>Все остальное сделаем мы сами!</p>
            <?php endif; ?>

            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'ask-formm',
                        'options' => ['class' => 'global-form'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [
                            'template' => '{input}',
                        ],
            ]);
            $position = \yii\web\View::POS_END;
            $validatejs = "$('#ask-form').on('afterValidateAttribute', function(event, attribute, messages) {
                    if(messages.length == 0){
                        yaCounter45675441.reachGoal(\"ask-form\");
                    }
                });";
            //if (!$siteConfig['mono'])
                //$this->registerJs($validatejs, $position);
            ?>

            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Ваш телефон',
                    'class' => 'phone', 'type' => 'tel'
                ],
            ])->label('')
            ?>
            <?= Html::submitButton('Оставить онлайн заявку', ['class' => 'btn', 'type' => 'button']) ?>                
            <?php ActiveForm::end() ?>
            <a class="politica" href="javascript:void(0)">Политика конфиденциальности и обработки персональных данных</a>
            <p class="data"> © 2017 <?= ucfirst($_SERVER['HTTP_HOST']); ?></p>
        </div>
        <div class="left">
            <div class="footer-logo">
                <img src="/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo-footer.svg?v=3" alt="">
            </div>
            <?php if (!$siteConfig['mono']): ?>
                <p><a href="/"><?= app\components\CController::$category['full_title']; ?></a></p>
                <ul class="footer-menu">
                    <li><a href="/remont-kofemashin-gaggia">Ремонт кофемашин Gaggia</a></li>
                    <li><a href="/remont-kofemashin-jura">Ремонт кофемашин Jura</a></li>
                    <li><a href="/remont-kofemashin-melitta">Ремонт кофемашин Melitta</a></li>
                    <li><a href="/remont-kofemashin-saeco">Ремонт кофемашин Saeco</a></li>
                    <li><a href="/brendy">Все ремонтируемые бренды</a></li>
                </ul>            
                <a href="/kontakty">Наши Контакты</a>
            <?php endif; ?>
            <div class="tel"><a class="phone <?= Yii::$app->session['region']['class']; ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></div>
        </div>
        <div class="clear"></div>
    </div>
</section>