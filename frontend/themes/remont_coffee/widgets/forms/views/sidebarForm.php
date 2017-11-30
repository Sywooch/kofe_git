<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="gl-contact" style="background: #fdfdfd url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?php if ($siteConfig['id'] == 53): ?>j/<?php endif; ?>logo.svg') center 97% no-repeat;background-size: 65%;">
    <div class="wrapper">
        <div class="heading">
            <a href="/kontakty" title="Контактная информация" style="line-height: 20px;">
                <b>Многоканальный номер телефона сервисного центра  </b>              
            </a>
        </div>
        <div class="data">
            <ul>
                <li><a style="font-size:20px; cursor: default;  color: #222;"><b>8 (495) 055-15-69</b></a></li>
                <li>
                    <span style="font-size:14px; color: #222">Время работы с 09:00 до 21:00</span>
                    <hr>
                </li>
                <li style="font-size: 14px">Срочный и квалифицированный ремонт  в день обращения. Уточняйте по телефону.</li>
            </ul>
        </div>
        <br/> 
        <strong>
            <span style="display: none; padding-bottom: 10px; font-size: 16px">Техническая поддержка</span>
        </strong>
        <div class="wpcf7">
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'sidebar-form',
                        'options' => ['class' => 'global-form'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [                            
                            'template' => '{input}',
                        ],
            ]);
            ?>
            <p class="wpcf7-form">
                <span class="wpcf7-form-control-wrap your-phone">
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Ваш телефон',
                            'class' => 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required input phone', 'type' => 'tel',
                            'size' => 40,
                        ],
                    ])->label('')
                    ?>
                </span>
                <br>
                <?= Html::submitInput('Отправить', ['class' => 'wpcf7-form-control wpcf7-submit submit', 'type' => 'submit']) ?>
            </p>
            <div class="wpcf7-response-output wpcf7-display-none"></div>
            <?php ActiveForm::end() ?>
        </div>
        <div class="links" style="margin-top: 0;">
            <ul>
                <li>
                    <div class="name"><a href="kontaktnaya-informaciya.html">Адрес сервисного центра</a></div>
                    <div class="description">ул. Николоямская, д. 62</div>
                </li>
            </ul>
        </div>
    </div>
</div>