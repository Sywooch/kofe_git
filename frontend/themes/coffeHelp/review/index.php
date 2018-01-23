<div class="bg otzivi">
    <div class="container theme-showcase" role="main">        
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="/">Ремонт кофемашин</a></li>
                    <li>Отзывы</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <h1 class="layout__title">Отзывы</h1>
            <div class="row my-review">
                <?php foreach ($rows as $row): ?>
                    <div class="reviews__box">
                        <p class="reviews__name"><?= $row['username']; ?></p>
                        <div class="reviews__rating reviews__rating_<?= $row['rating']; ?>"></div>
                        <p class="reviews__text"><?= $row['message']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <?=
            \yii\widgets\LinkPager::widget([
                'pagination' => $pagination,
            ]);
            ?>
        </div>
    </div>
</div>

<div class="addreview">
    <div class="post__content">
        <br>
        <h2>Оставить отзыв</h2>
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;
        use kartik\rating\StarRating;

$form = ActiveForm::begin([
                    'id' => 'review-form',
                    'options' => ['class' => 'form form_feedback'],
                    'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
        ]);
        ?>
        <div class="form__row">
            <label class="form__element form__element_input">
                <?= $form->field($model, 'username')->textInput(['placeholder' => 'Ваше имя', 'class' => 'form__input form__input_big']) ?>
            </label>
            <label class="form__element form__element_input">
                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Номер заказа', 'class' => 'form__input form__input_big']) ?>
            </label>
            <label class="form__element form__element_input form__element_valid">
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
            </label>

        </div>
        <div class="form__row">
            <label class="form__element form__element_textarea">
                <?= $form->field($model, 'message')->textarea(['placeholder' => 'Содержание отзыва', 'class' => 'form__textarea form__textarea_big']) ?>
            </label>
        </div>
        <div class="clear"></div>                
        <label class="form__element form__element_input form__element_valid">
            <div class="form__row form__row_submit">
                <?= Html::submitInput('Отправить', ['class' => 'button button_success button_text button_big']) ?>
            </div>
        </label>
        <?php ActiveForm::end() ?>
    </div>
</div>
<div class="my-footer-block">
    <div class="container theme-showcase" role="main">
        <hr class="big_line">
        <section class="about">
            <div class="row">
                <?= $pageInfo['full_description']; ?>
            </div>
        </section>
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
        </section>
    </div>
</div>
