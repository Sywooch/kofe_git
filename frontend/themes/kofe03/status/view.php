<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<main class="Lay-cont" role="main">
    <header class="layout__head">
        <div class="layout__inner">
            <nav itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item">
                        <a class="breadcrumbs__link" itemscope itemtype="http://schema.org/Thing" itemprop="item" rel="Ремонт кофемашин" href="/">
                            <span itemprop="name">Ремонт кофемашин</span>
                        </a>
                        <meta itemprop="position" content="0" />
                    </li>
                </ul>
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__current"><span itemscope="" itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name"><?= $pageInfo['title']; ?></span></span> <meta itemprop="position" content="1" /></span>
            </nav>
        </div>
    </header>
    <div class="content">
        <div class="content__inner">
            <?= kofe03\widgets\menu\LeftMenu::widget(['curUrl' => $pageInfo['url']]); ?>
            <main class="content__main" role="main">
                <article class="post" style="width: 100%;">
                    <header class="post__header">
                        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
                    </header>
                    <div class="post__content">
                        <div class="post__content">
                            <ul>
                                <li>Для получения оперативной информации о статусе ремонта вашей кофемашины, позвоните на номер <a class="number-phone" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a> или заполните нижеследующую форму:</li>
                            </ul>
                            <?php

                            use yii\helpers\Html;
                            use yii\widgets\ActiveForm;
                            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                        'id' => 'status-form',
                                        'options' => ['class' => 'form form_feedback ajax_form'],
                                        'enableClientValidation' => true,
                                        'fieldConfig' => [
                                            'template' => '{input}',
                                        ],
                            ]);
                            ?>
                            <div class="form_r">
                                <label class="form_yelem form_yelem-inp">
                                    <?= $form->field($model, 'orderNumber')->textInput(['class' => 'form__input form__input_big', 'placeholder' => 'Номер заказа']); ?>
                                </label> 
                                <label class="form_yelem form_yelem-inp form__element_valid"> 
                                    <?=
                                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                                        'name' => 'phone',
                                        'mask' => '+7 (999) 999-99-99',
                                        'options' => [
                                            'placeholder' => '+7 (___) ___-__-__',
                                            'class' => 'form__input form__input_big form__input_phone-mask', 'type' => 'tel',
                                            'size' => 40,
                                        ],
                                    ])->label('')
                                    ?>
                                </label>
                            </div>
                            <div class="personalData">
                                <label class="form_yelem form_yelem-inp form__element_valid">
                                    <?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null])->label(false); ?>
                                    <span class="f14">Согласен с условиями <a href="/policy" target="_blank">обработки персональных данных</a></span>
                                </label>
                            </div>
                            <div class="form_r Form-row-sub">
                                <label class="form_yelem form_yelem-inp form__element_valid">
                                    <?= Html::submitInput('Отправить', ['class' => 'button button_success button_text button_big', 'type' => 'submit']) ?>
                                </label>
                            </div>
                            <label class="form_yelem form_yelem-inp form__element_valid"> </label>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                </article>

            </main>
        </div>
    </div>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>