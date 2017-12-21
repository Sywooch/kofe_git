<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$lastId = 0;
$this->title = $pageInfo['meta_title'];
?>
<?= multicat\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-19">
    <div class="container">
        <a href="#number-22" class="btn green">Оставить отзыв</a>
        <h1>Отзывы</h1>
        <?php foreach ($rows as $row): ?>
            <div class="item">
                <div class="stars">
                    <span><?= $row['rating']; ?></span>
                    <div class="n-rating-stars" data-bem="{}" data-rate="<?= $row['rating']; ?>">
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                    </div>
                </div>
                <div class="info">
                    <div class="name"><?= $row['username']; ?></div>
                    <p><?= $row['message']; ?></p>
                </div>
                <div class="clear"></div>
            </div>
            <?php $lastId = $row['id']; ?>
        <?php endforeach; ?>
        <div id="reviews-here"></div>        
        <?php if (count($rows) >= 10): ?>
            <div class="for-center">
                <div id="more-comments" data-last="<?= $lastId; ?>">Показать еще</div>
            </div>
        <?php endif; ?>
    </div>
</section>
<section id="number-22">
    <div class="container">
        <div class="title">Вы можете оставить свой отзыв</div>
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
        <div>
            <span>Введите как вас зовут</span>
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div>
            <span>Ваша почта</span>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div>
            <span>Оценка</span>
            <?=
            $form->field($model, 'rating')->widget(StarRating::classname(), [
                'pluginOptions' => [
                    'size' => 'lg',
                    'showCaption' => false,
                    //'theme' => 'krajee-uni',
                    'filledStar' => '&#x2605;',
                    'emptyStar' => '&#x2606;'
                ]
            ]);
            ?>
        </div>
        <div>
            <span>Введите отзыв об услуге ремонта</span>
            <?= $form->field($model, 'message')->textarea(['maxlength' => true]) ?>
        </div>
        <div class="for-center">
            <?= Html::submitButton('Отправить отзыв', ['class' => 'btn green zakaz colorbg colorbghover']) ?>
        </div>
        <?php ActiveForm::end() ?>
    </div>
    <div class="clear"></div>
</section>
<section id="number-23">
    <a id="gotop" class="colorbg colorbghover" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>