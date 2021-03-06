<?php
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<main class="Lay-cont" role="main">
    <header class="layout__head">
        <div class="layout__inner">
            <nav itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item">
                        <a class="breadcrumbs__link" itemscope itemtype="http://schema.org/Thing" itemprop="item" rel="Ремонт кофемашин" href="//kofe03.ru">
                            <span itemprop="name">Ремонт кофемашин</span>
                        </a>
                        <meta itemprop="position" content="0" />
                    </li>
                </ul>
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__current"><span itemscope="" itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name">Отзывы</span></span> <meta itemprop="position" content="1" /></span>
            </nav>
            <h1 class="layout__title">Отзывы</h1>
        </div>
    </header>
    <section class="reviews reviews_context">
        <div class="reviews__inner">
            <div class="reviews__list">
                <?php foreach ($rows as $row): ?>
                    <article class="reviews__item">
                        <div class="reviews__box">
                            <h4 class="reviews__name"><?= $row['username']; ?></h4>
                            <div class="reviews__rating reviews__rating_<?= $row['rating']; ?>"></div>
                            <?= $row['message']; ?>
                            <div class="reviews__more">
                                <a class="reviews__full popup_js" data-popup="review_<?= $row['id']; ?>" href="#">Еще</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
                <?=
                \yii\widgets\LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>
            <?php foreach ($rows as $row): ?>
                <div class="popup popup_reviews popup_review_<?= $row['id']; ?>">
                    <div class="popup__bg"></div>
                    <div class="popup__main">
                        <div class="popup__review">
                            <div class="reviews">
                                <div class="reviews__single reviews__single_zoon">
                                    <div class="reviews__container">
                                        <h4 class="reviews__name"><?= $row['username']; ?></h4>
                                        <div class="reviews__rating reviews__rating_5"></div>
                                        <div class="reviews__text_popup">
                                            <?= $row['message']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup__close"></div>
                    </div>
                </div>
            <?php endforeach; ?>
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
                <div class="form_r">
                    <label class="form_yelem form_yelem-inp">
                        <?= $form->field($model, 'username')->textInput(['placeholder' => 'Ваше имя', 'class' => 'form_input form__input_big']) ?>
                    </label>
                    <label class="form_yelem form_yelem-inp">
                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Номер заказа', 'class' => 'form_input form__input_big']) ?>
                    </label>
                    <label class="form_yelem form_yelem-inp form__element_valid">
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
                <div class="form_r">
                    <label class="form_yelem form__element_textarea">
                        <?= $form->field($model, 'message')->textarea(['placeholder' => 'Содержание отзыва', 'class' => 'form__textarea form__textarea_big']) ?>
                    </label>
                </div>
                <div class="clear"></div>                
                <label class="form_yelem form_yelem-inp form__element_valid">
                    <div class="form_r Form-row-sub">
                        <?= Html::submitButton('Отправить', ['class' => 'm_btn btn_war Btn-w Btn-big Btn-txt']) ?>
                    </div>
                </label>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </section>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>