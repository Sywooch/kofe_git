<div id="online-zayavkamy" tabindex="-1" role="dialog" class="modal iframe fade">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="modal--close"><span class="modal--close-label visible-xs">Закрыть</span><i class="modal--close-icon"></i></a>
                <div class="modal--title"> Онлайн заявка </div>
            </div>
            <div class="modal-body modal-form">
                <?php

                use yii\helpers\Html;
                use yii\widgets\ActiveForm;
                use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                            'id' => 'popup-form',
                            //'options' => ['class' => 'form form_request callback'],
                            'enableClientValidation' => true,
                            'fieldConfig' => [
                                'template' => '{input}',
                            ],
                ]);
                ?>
                <input class="form-control " type="hidden" name="product" value="" />
                <div class="form-group row mb " id="">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label class="form--label "> Ваш телефон </label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <?=
                        $form->field($model, 'phone')->widget(MaskedInput::className(), [
                            'name' => 'phone',
                            'mask' => '+7 (999) 999-99-99',
                            'options' => [
                                'placeholder' => '+7 (___) ___-__-__',
                                'type' => 'tel',
                                'size' => 40,
                                'class' => 'form-control',
                            ],
                        ])->label('')
                        ?>
                    </div>
                </div>
                <div class="mainform-b mb">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg btn-block', 'type' => 'submit']) ?>
                </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>

<div id="vibrat-region" tabindex="-1" role="dialog" class="modal iframe fade">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="modal--close"><span class="modal--close-label visible-xs">Закрыть</span><i class="modal--close-icon"></i></a>
                <div class="modal--title"> Выберите регион  </div>
            </div>
            <div class="modal-body modal-form mb">
               <a class="sec-nav--item-l active" href="#">МОСКВА И ОБЛАСТЬ</a>
               <a class="sec-nav--item-l" style="border-bottom:1px solid #d8dcde;" href="#">САНКТ-ПЕТЕРБУРГ</a>
            </div>
        </div>
    </div>
</div>

<div id="spasibo" tabindex="-1" role="dialog" class="modal iframe fade">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-label="Close" class="modal--close"><span class="modal--close-label visible-xs">Закрыть</span><i class="modal--close-icon"></i></a>
                <div class="modal--title"> Заявка отправлена!  </div>
            </div>
            <div class="modal-body modal-form mb">
                <i class="icon-check"></i>
               Спасибо за заявку. Мы вам перезвоним.
            </div>
        </div>
    </div>
</div>