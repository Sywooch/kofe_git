<div class="col-xs-3">
    <section class="section_promo_form">
        <div class="tb_sidebar_cont">
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'side-form',
                        'options' => ['class' => 'tb_sidebar_form'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [
                            'template' => '{input}',
                        ],
            ]);
            ?>            
            <span class="tb_sidebar_title">Бесплатная диагностика</span> 
            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Номер телефона',
                    'type' => 'tel',
                ],
            ])->label('')
            ?>
            <?= Html::submitInput('Отправить', ['class' => 'call-master', 'type' => 'submit']) ?>
            <span class="tb_sidebar_extra_text">Выезд мастера от 30 минут</span>
            <?php ActiveForm::end() ?>
        </div>
    </section>
</div>