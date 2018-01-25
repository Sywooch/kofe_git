<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="inner-bg page-list">
    <div class="container theme-showcase" role="main">        
        <section class="promo widthsto">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Ремонт кофемашин</a></li>
                        <li><?= $pageInfo['title']; ?></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>       
                    <?= $pageInfo['description']; ?>
                </div>
                <?= coffeHelp\widgets\forms\SidebarForm2::widget(); ?>
            </div>
        </section>
        <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage2']); ?>
        <section class="who equipment">
            <div class="row">
                <div class="col-sm-9 left-col">
                    <div class="row">
                        <div class="col-sm-12 left-col w">                            
                            <div class="post__content">                                
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
                                <div class="form__row">
                                    <label class="form__element form__element_input">
                                        <?= $form->field($model, 'orderNumber')->textInput(['class' => 'form__input form__input_big', 'placeholder' => 'Номер заказа'])->label(false); ?>
                                    </label> 
                                    <label class="form__element form__element_input form__element_valid"> 
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
                                    <label class="form__element form__element_input form__element_valid">
                                        <?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null])->label(false); ?>
                                        <span class="f14">Согласен с условиями <a href="/policy" target="_blank">обработки персональных данных</a></span>
                                    </label>
                                </div>
                                <div class="form__row form__row_submit">
                                    <label class="form__element form__element_input form__element_valid">
                                        <?= Html::submitInput('Отправить', ['class' => 'button button_success button_text button_big', 'type' => 'submit']) ?>
                                    </label>
                                </div>
                                <label class="form__element form__element_input form__element_valid"> </label>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    </div>
                    <section class="sidebar">
                        <div class="tb_sidebar_cont">
                            <span class="tb_sidebar_title">Нас выбирают, потому что:</span>
                            <div class="tb_sidebar_item">
                                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Бесплатная диагностика</span> <span class="tb_sidebar_extra_text">Проведём диагностику устройства.</span></div>
                                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/washer.png">
                            </div>
                            <div class="tb_sidebar_item">
                                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Фирменные запчасти</span> <span class="tb_sidebar_extra_text">Имеем в наличии основные запчасти для кофемашин.</span></div>


                                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/shield.png">
                            </div>
                            <div class="tb_sidebar_item">
                                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Форма оплаты</span> <span class="tb_sidebar_extra_text">Принимаем не только наличные, но и безнал и карты.</span></div>


                                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/coins.png">
                            </div>
                            <div class="tb_sidebar_item">
                                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Работаем ежедневно</span> <span class="tb_sidebar_extra_text">Работаем и в праздники и в выходные.</span></div>
                                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/calendar.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                    </section>
                    <div class="clear"></div>
                    <?= coffeHelp\widgets\forms\MainPageForm::widget(); ?>
                </div>
                <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage3']); ?>
            </div>
        </section>

        <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage4']); ?>
    </div>
</div>
<div class="my-footer-block">
    <div class="container theme-showcase" role="main">
        <hr class="big_line">    
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
        </section>
    </div>
</div>
