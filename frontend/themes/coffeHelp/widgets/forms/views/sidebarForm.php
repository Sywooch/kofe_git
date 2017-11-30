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
                        'placeholder' => 'Ваш телефон',
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
                    <h3>Обслуживаемые города МО</h3>
                    <div class="row">
                        <a href="#">Балашиха</a>
                        <a href="#">Химки</a>
                        <a href="#">Подольск</a>
                        <a href="#">Королёв</a>
                        <a href="#">Люберцы</a>
                        <a href="#">Мытищи</a>
                        <a href="#">Электросталь</a>
                        <a href="#">Железнодорожный</a>
                        <a href="#">Коломна</a>
                        <a href="#">Одинцово</a>
                        <a href="#">Красногорск</a>
                        <a href="#">Серпухов</a>
                        <a href="#">Орехово-Зуево   </a>
                        <a href="#">Щёлково</a>
                        <a href="#">Домодедово</a>
                        <a href="#">Жуковский</a>
                        <a href="#">Сергиев Посад</a>
                        <a href="#">Пушкино</a>
                        <a href="#">Раменское</a>
                        <a href="#">Ногинск</a>
                    </div>
                    <div class="map">
                        <iframe src="https://api-maps.yandex.ru/frame/v1/-/CZd6mYiq" width="100%" height="282" frameborder="0"></iframe>
                    </div>
                </div> 
            </div>
