<div class="mainform">
    <p style="display: inline-block; margin-bottom: 10px; text-align: center; background: #fff; padding: 0px 10px;" class="wide-slider--stitle">Заказать обратный звонок</p>
    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                'id' => 'main-form',
                'enableClientValidation' => true,
                'fieldConfig' => [
                    'template' => '{input}',
                ],
    ]);
    ?>
    <label>
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Ваш телефон',
                'class' => 'form-control form-control', 'type' => 'tel',
                'size' => 40,
            ],
        ])->label('')
        ?>
    </label>
    <div class="mainform-b">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg btn-block', 'type' => 'submit']) ?>
    </div>
    <div class="soglasen">
        <span>
            <?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null])->label(false); ?>
        </span>            
        <span>Согласен с условиями <a href="/konfidencial-info" target="_blank">обработки персональных данных</a></span>
    </div>
    <?php ActiveForm::end() ?>
    <p></p>
</div>