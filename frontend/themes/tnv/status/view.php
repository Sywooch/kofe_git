<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
$breadcrumbs = [
    $model['title'],
];
?>
<?= tnv\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="aside-layout container mb166">
    <div class="row sticky-parent">
        <aside class="aside float--left col-xs-12 col-md-4" data-stick="true">
            <div class="aside--inner sm-reverse lg-pr">
                <div class="mb">
                    <?= tnv\widgets\other\LeftMenu::widget(); ?>
                </div>
            </div>
        </aside>
        <div class="page float--right col-xs-12 col-md-8">
            <div data-flatr="webpage 46">
                <h1 class="page--title"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
                <div class="richtext">
                    <div class="text"><?= $model['description']; ?></div>
                    <div class="row">
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
                        <label class="col-xs-12 col-md-6">
                            <?= $form->field($model, 'orderNumber')->textInput(['class' => 'form_input  form__input_big', 'placeholder' => 'Номер заказа']); ?>
                        </label>
                        <label class="col-xs-12 col-md-6">
                            <?=
                            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                                'name' => 'phone',
                                'mask' => '+7 (999) 999-99-99',
                                'options' => [
                                    'placeholder' => '+7 (___) ___-__-__',
                                    'class' => 'form_input form__input_big Form-inp-ph-m', 'type' => 'tel',
                                    'size' => 40,
                                ],
                            ])->label('')
                            ?>
                        </label>
                        <div class="col-xs-12 col-md-12">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg btn-block', 'type' => 'submit']) ?>                                
                        </div>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>