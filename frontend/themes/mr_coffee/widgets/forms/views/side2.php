<section class="js-ajax mb40 mt40">
    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                'id' => 'side2-form',
                'options' => ['class' => 'panel js-required-form'],
                'enableClientValidation' => true,
                'fieldConfig' => [
                    'template' => '{input}',
                ],
    ]);
    ?>    
    <h4 class="panel__caption text-red">Хочешь скидку?</h4>
    <p class="mt0">Получи купон c персональной скидкой на свой телефон.</p>
    <label class="form-lbl form-lbl--for-input js-inputmask-phone required"><span class="form-lbl__text">Телефон</span>
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Телефон',
                'maxlength' => 15,
                'type' => 'tel',
                //'class' => 'inputtext',
                'size' => 20
            ],
        ])->label('')
        ?> 
    </label>
    <div class="panel__footer mt15">
        <button type="submit" class="button button--red button--small">Получить скидку</button>
        <div class="checkbox-field checkbox-field--size_s text-theme-black mt15">Согласен на обработку данных. &nbsp; <a class="agreem" href="../privacy/index.html" target="_blank">Соглашение</a></div>
    </div>
    <?php ActiveForm::end() ?>
</section>