<section id="ask-form">
    <div class="container">
        
        <div class="right">
            <img src="/images/master.png">
            <p class="title"><span>Обращайтесь к профессионалам</span></p>
            <p class="info">Оставьте онлайн заявку сейчас<br> Все остальное сделаем мы сами!</p>
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'ask-formm',
                        'options' => ['class' => 'global-form'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [
                            'template' => '{input}',
                        ],
                    ])
            ?>
                  
            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Ваш телефон',
                    'class' => 'phone', 'type' => 'tel'
                ],
            ])->label('')
            ?>
            <?= Html::submitButton('Оставить онлайн заявку', ['class' => 'btn', 'type' => 'button']) ?>                
            <?php ActiveForm::end() ?>
            <p class="data"> © 1999 - 2017 RemontKofe.ru</p>
        </div>
        <div class="left">
            <div class="footer-logo">
                <img src="/images/logo-footer.svg" alt="">
            </div>
            <p>Ремонт кофемашин</p>
            <ul class="footer-menu">
                <li><a href="#">Ремонт кофемашин AEG</a></li>
                <li><a href="#">Ремонт кофемашин Melitta</a></li>
                <li><a href="#">Ремонт кофемашин Delonghi</a></li>
                <li><a href="#">Ремонт кофемашин AEG</a></li>
                <li><a href="#">Все ремонтируемые бренды</a></li>

            </ul>
            <a href="#">Наши Контакты</a>
            <div class="tel"><a class="phone moskva" href="tel:+84994509008">8(499) 450-90-08</a></div>
        </div>
        <div class="clear"></div>
    </div>
</section>