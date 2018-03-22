<div data-slider-step="571" class="wide-slider clearfix">
    <div class="wide-slider--desc mb133">
        <div class="wide-slider--desc-content">
            <div class="lg-pr">
                <h2 class="wide-slider--title">Добавить отзыв</h2>
                <div class="richtext wide-slider--text">
                    <p>Вы посетили сервисный центр и вам выполнили ремонт кофемашины? Оставьте отзыв о впечатлениях и проведённой работе.</p>
                </div>
                <?php

                use yii\helpers\Html;
                use yii\widgets\ActiveForm;
                use yii\widgets\MaskedInput;
                use kartik\rating\StarRating;

$form = ActiveForm::begin([
                            'id' => 'review-form',
                            //'options' => ['class' => 'global-form'],
                            'enableClientValidation' => true,
                            'fieldConfig' => [
                                'template' => '{input}',
                            ],
                ]);
                ?>
                <label style="width: 100%">
                    <div class="form-group field-orderform2-phone required">
                        <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'class' => 'form-control form-control', 'placeholder' => 'Введите как вас зовут']) ?>
                    </div>
                </label>
                <div class="form-group row mb " id="">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label class="form--label ">Оценка</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <?=
                        $form->field($model, 'rating')->dropDownList([
                            '5' => '5 - отлично',
                            '4' => '4 - хорошо',
                            '3' => '3 - так себе',
                            '2' => '2 - плохо',
                            '1' => '1 - ужасно'], ['class' => 'selectpicker']);
                        ?>
                    </div>
                </div>
                <label style="width: 100%">
                    <div class="form-group field-orderform2-phone required">
                        <?= $form->field($model, 'message')->textarea(['maxlength' => true, 'class' => 'form-control form-control', 'placeholder' => 'Введите отзыв']) ?>
                    </div>
                </label>
                <div class="form__row form__row_submit">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
    <div class="wide-slider--content">
        <div class="wide-slider--control clearfix">
            <h3 class="wide-slider--stitle float--left">Отзывы наших клиентов</h3>
            <div class="wide-slider--buttons float--right"><a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a><a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a></div>
        </div>
        <div class="wide-slider--container">
            <div class="wide-slider--scroller">
                <?php foreach ($rows as $row): ?>
                    <div class="live-box">
                        <div class="live-box--title"><?= $row['username']; ?></div>
                        <div class="n-rating-stars" data-bem="{}" data-rate="<?= $row['rating']; ?>">
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                        </div>
                        <div class="clearfix">
                            <p><?= $row['message']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>