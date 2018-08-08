<div class="side-col hide-for-tablet">
    <div class="panel form-top form js-ajax" >
        <h4 class="panel__caption text-red">Закрепить скидку 10% на ремонт</h4>
        <p class="mt0">Введите ваш номер телефона ниже и закрепите скидку</p>
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'main-form',
                    //'options' => ['class' => 'request-form'],
                    'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
        ]);
        ?>
        <label class="form-lbl js-inputmask-phone required">
            <span class="form-lbl__text">Телефон*</span>
            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Телефон',
                    'maxlength' => 15,
                    'type' => 'tel',
                    'class' => 'inputtext',
                    'size' => 20
                ],
            ])->label('')
            ?>              
        </label>
        <label class="form-lbl">
            <span class="form-lbl__text">Описание поломки</span>
            <?= $form->field($model, 'message')->textarea(['placeholder' => 'Опишите проблему...'])->label(''); ?>
        </label>
        <button class="button button--wide" type="submit" name="web_form_submit">Закрепить скидку</button>
        <div class="checkbox-field checkbox-field--size_s text-theme-black mt15">Согласен на обработку данных. &nbsp; <a class="agreem" href="privacy/index.html" target="_blank">Соглашение</a></div>
        <?php ActiveForm::end() ?>
        <div class="row form__success">
            <div class="col-12 text-center">
                <h3>Ожидайте звонка!</h3>
            </div>
        </div>
    </div>
</div>