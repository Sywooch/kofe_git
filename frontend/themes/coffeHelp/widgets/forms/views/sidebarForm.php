<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="row">
    <div class="col-xs-5 form_order_bg">
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
        <div id="form_order" class="order_form">
            <h3>Онлайн-заказ</h3>
            <div class="row">
                <div class="col-xs-12" style="padding-right: 14px;">
                    <div class="input-group-lg"> <input id="order_name" type="text" class="form-control" placeholder="Как вас зовут?" name="name"></div>
                    <br>
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => '+7 (___) ___-__-__',
                            'class' => 'form-control', 'type' => 'tel',
                            'size' => 40,
                        ],
                    ])->label('')
                    ?>

                    <br>
                </div>
                <div class="col-xs-12">
                    <div class="input-group-lg">
                        <?= $form->field($model, 'comment')->textarea(['class' => 'form-control', 'placeholder' => 'Опишите пожалуйста, что нужно сделать', 'style' => 'height: 110px;', 'rows' => 4]); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12" style="text-align: center;"> 
                    <?= Html::submitButton('ОТПРАВИТЬ ЗАЯВКУ', ['class' => 'btn btn-default call-master', 'type' => 'submit']) ?>
                </div>
                <div class="col-xs-12" style="text-align: center;">
                    <p>Работаем с физическими и юридическими лицами. Наличный и безналичный расчет.</p>
                </div>
            </div>
        </div>
        <?php ActiveForm::end() ?>
    </div>
    <div class="col-xs-7 goroda">
        <h3>Обслуживаемые города<?= $siteConfig['id'] == 53 ? ' Ленинградской области' : ' МО' ?></h3>
        <div class="row">
            <?php foreach ($rows as $row): ?>
                <a href="/<?= $row['url']; ?>"><?= str_replace(['Ремонт кофемашин в городе ', '!'], '', $row['title']); ?></a>
            <?php endforeach; ?>
        </div>
        <div class="map">
            <?php if ($siteConfig['id'] == 53): ?>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3036990399fde055fb3fb8590cecf709bae0012d783ffe65458f83a239e55778&amp;source=constructor" width="100%" height="282" frameborder="0"></iframe>
            <?php else: ?>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae86ef23702529a7b29452fc413b7aaffb164368d5513e8553fa69fd47e2d43d8&amp;source=constructor" width="100%" height="282" frameborder="0"></iframe>
            <?php endif; ?>
        </div>
    </div> 
</div>
