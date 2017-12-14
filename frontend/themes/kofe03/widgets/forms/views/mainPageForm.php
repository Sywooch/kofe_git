<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="poster__request">
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
    ?>    
    <div class="form__box">
        <?php if (!empty($h1)): ?>
            <h1 class="poster__title" itemprop="name"><?= $h1; ?></h1>
            <div class="crear"></div>
        <?php endif; ?>
        <h3 class="form__title">Оставьте онлайн заявку по Акции! 🎁</h3>
        <div class="form__row">
            <label class="form__element form__element_input">
                <?=
                $form->field($model, 'phone')->widget(MaskedInput::className(), [
                    'name' => 'phone',
                    'mask' => '+7 (999) 999-99-99',
                    'options' => [
                        'placeholder' => '+7 (___) ___-__-__',
                        'class' => 'form__input form__input_phone-mask', 'type' => 'tel',
                        'autofocus' => 'true',
                        'size' => 40,
                    ],
                ])->label('')
                ?>
            </label>
        </div>
        <div class="poster__text for_mobi" itemprop="description">
            <ul>
                <li>Диагностика - <span class="minus">1500р</span> 0р</li>
                <li>Выезд и доставка - <span class="minus">1000р</span> 0р</li>
                <li>Подменная кофемашина - <span class="minus">2000р</span> 0р</li>
                <li>Гарантия <span class="minus">от 3 до 6 мес</span> от 6 до 24 мес.</li>
                <li>Срочный ремонт за <span class="minus">48 часов</span> 24 часа</li>
                <li>Бесплатная парковка рядом с нами!</li>
            </ul>
        </div>
        <div class="form__row form__row_submit">
            <?= Html::submitButton('Заказать сейчас', ['class' => 'button button_warning button_wide button_big button_text', 'type' => 'submit']) ?>
        </div>
        <span id="messenger"></span>

        <div class="personalData"><?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null])->label(false); ?><span>Согласен с условиями <a href="/policy" target="_blank">обработки персональных данных</a></span></div>
    </div>
    <?php ActiveForm::end() ?>
</div>