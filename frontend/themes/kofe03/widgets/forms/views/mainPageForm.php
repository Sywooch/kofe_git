<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="Poseter-req">
    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                'id' => 'main-form',
                'options' => ['class' => 'form form_request callback'],
                'enableClientValidation' => true,
                'fieldConfig' => [
                    'template' => '{input}',
                ],
    ]);
    if ($siteConfig['id'] == 50) {
        //$validatejs = "$('#main-form').on('afterValidateAttribute', function(event, attribute, messages) {if(messages.length == 0){yaCounter47134782.reachGoal(\"app_for_shares\");}});";
        //$this->registerJs($validatejs, \yii\web\View::POS_END);
    }
    ?>    
    <div class="form_b">
        <?php if (!empty($h1)): ?>
            <h1 class="Poseter-ilova gl-text-gorad" itemprop="name"><?= $h1; ?></h1>
            <div class="crear"></div>
        <?php endif; ?>
        <h3 class="form_t">Оставьте онлайн заявку по Акции! 🎁</h3>
        <ul class="form_tdsa">
            <li><span>1</span>Заявка</li>
            <li><span>2</span>Согласование</li>
            <li><span>3</span>Ремонт</li>
        </ul>
        <div class="form_r">
            <label class="form_yelem form_yelem-inp">
                <?=
                $form->field($model, 'phone')->widget(MaskedInput::className(), [
                    'name' => 'phone',
                    'mask' => '+7 (999) 999-99-99',
                    'options' => [
                        'placeholder' => '+7 (___) ___-__-__',
                        'class' => 'form_input Form-inp-ph-m', 'type' => 'tel',
                        'size' => 40,
                    ],
                ])->label('')
                ?>
            </label>
        </div>
        <div class="Poseter-texete f_mob" itemprop="description">
            <ul>
                <li>Диагностика - <span class="minus">1500р</span> 0р</li>
                <li>Выезд и доставка - <span class="minus">1000р</span> 0р</li>
                <li>Подменная кофемашина - <span class="minus">2000р</span> 0р</li>
                <li>Гарантия <span class="minus">от 3 до 6 мес</span> от 6 до 24 мес.</li>
                <li>Срочный ремонт за <span class="minus">48 часов</span> 24 часа</li>
                <li>Бесплатная парковка рядом с нами!</li>
            </ul>
        </div>
        <div class="form_r Form-row-sub">
            <?= Html::submitButton('Заказать сейчас', ['class' => 'm_btn btn_war Btn-w Btn-big Btn-txt', 'type' => 'submit']) ?>
        </div>
        <span id="messenger"></span>

        <div class="personalData">
                <?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null])->label(false); ?>
            <span>Я прочитал условия  <a href="/policy" target="_blank">обработки персональных данных</a> и полностью согласен с ними.</span>
        </div>
    </div>
    <?php ActiveForm::end() ?>
</div>