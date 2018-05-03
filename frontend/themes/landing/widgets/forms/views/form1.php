<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => $id,
            'options' => ['class' => 'form default'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<?php if(!empty($title)): ?><div class="form__title"><?= $title; ?></div><?php endif; ?>
<?php if(!empty($sub_title)): ?><div class="form__subtitle"><?= $sub_title; ?></div><?php endif; ?>
<div class="form__field">
    <?=
    $form->field($model, 'phone')->widget(MaskedInput::className(), [
        'name' => 'phone',
        'mask' => '+7 (999) 999-99-99',
        'options' => [
            'placeholder' => 'Телефон',
            'type' => 'tel',
            'size' => 40,
            'class' => 'form__input form__input--fw'
        ],
    ])->label('')
    ?>
</div>
<input class="source" type="hidden" name="source" value=""/>
<input class="term" type="hidden" name="term" value=""/>
<input class="campaign" type="hidden" name="campaign" value=""/>
<input class="content" type="hidden" name="content" value=""/>
<input class="medium" type="hidden" name="medium" value=""/>
<input name="formname" type="hidden" value=""/>
<div class="form__field form__field--btn">
    <?= Html::submitButton($button, ['class' => 'btn btn--fw', 'type' => 'submit']) ?>
</div>
<div class="form__desc">Ремонт выполняется специализицироваными инженерами и с использованием оригинальных комплектующих!
</div>
<div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-free" checked="checked"/>
    <label class="policy__label" for="policy-free">
        <span class="box"></span>
        <span class="text">Я согласен с условиями  <a href="doc/politics.docx">политики конфиденциальности </a></span>
    </label>
</div>
<?php ActiveForm::end() ?>