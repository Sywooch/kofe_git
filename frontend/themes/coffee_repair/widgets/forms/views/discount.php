<div class="content2">
    <div class="page-wrap">
        <div class="left_block">
            <h2><span class="precent">5%</span> скидка <span class="online">при онлайн-заявке</span></h2>
            <ul>
                <li>Бесплатный выезд мастера</li>
                <li>Бесплатная диагностика</li>
                <li>Ремонт на дому или офисе</li>
                <li>Бесплатная доcтавка в сервис</li>
                <li>Гарантия на ремонт до 3-х лет</li>
            </ul>
        </div>
        <div class="right_block">
            <span>Круглосуточный прием заявок</span>
            <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'footer-form',
                        'options' => ['class' => 'zayavka ajax_form'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [
                            'template' => '{input}',
                        ],
            ]);
            ?>
            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Введите номер',
                    'class' => 'phone', 'type' => 'tel'
                ],
            ])->label('')
            ?>
            <button type="submit">Вызвать мастера на дом</button>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>