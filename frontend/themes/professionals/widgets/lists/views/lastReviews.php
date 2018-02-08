<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="reviews">
    <div class="container">
        <div class="row">
            <div class="col-xs-16">
                <h2 class="title title__2">Отзывы клиентов</h2>
                <div class="reviews-list" id="reviews-slider">
                    <?php foreach ($rows as $row): ?>
                        <div class="review">
                            <div class="review-wrap">
                                <div class="row review-head">
                                    <div class="col-xs-8">
                                        <div class="review_pic">
                                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>reviews/<?= $row['image']; ?>" alt="<?= $row['username']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-16">
                                        <div class="review_name"><?= $row['username']; ?></div>
                                    </div>
                                </div>
                                <div class="review_claim">
                                    <?= $row['message']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>                    
                </div>
            </div>
            <div class="col-xs-8">
                <h2 class="title title__2">Оставить отзыв</h2>
                <div class="form dark">
                    <?php

                    use yii\helpers\Html;
                    use yii\widgets\ActiveForm;
                    use yii\widgets\MaskedInput;
                    use kartik\rating\StarRating;

$form = ActiveForm::begin([
                                'id' => 'review-form',
                                //'options' => ['class' => 'form form_feedback'],
                                'enableClientValidation' => true,
                                'fieldConfig' => [
                                    'template' => '{input}',
                                ],
                    ]);
                    ?>
                    <div class="row">
                        <div class="col-xs-16">
                            <?= $form->field($model, 'username')->textInput(['placeholder' => 'Ваше имя']) ?>
                        </div>
                        <div class="col-xs-8">
                            <?=
                            $form->field($model, 'rating')->widget(StarRating::classname(), [
                                'pluginOptions' => [
                                    'size' => 'sm',
                                    'showCaption' => false,
                                    //'theme' => 'krajee-uni',
                                    'filledStar' => '&#x2605;',
                                    'emptyStar' => '&#x2606;'
                                ]
                            ]);
                            ?>
                        </div>
                        <div class="col-xs-24">
                            <?= $form->field($model, 'message')->textarea(['placeholder' => 'Содержание отзыва']) ?>
                        </div>
                        <div class="col-xs-24">
                            <?= Html::submitButton('Отправить', ['type' => 'submit']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
</section>