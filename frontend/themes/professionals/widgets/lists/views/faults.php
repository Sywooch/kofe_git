<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$prefUrl = '';
$url = Yii::$app->request->pathInfo;
$url = explode('/', $url);
array_pop($url);
if (!empty($url))
    $prefUrl = implode('/', $url);
?>
<section class="faults">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <div class="title title__2"><?= $title; ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-17 col-sm-24">
                <div class="fault-items">
                    <div class="row">
                        <?php foreach ($rows as $row): ?>
                            <?php
                            $fileId = Yii::getAlias('@frontend') . '/web/' . $siteConfig['theme'] . '/images/services/' . $siteConfig['id'] . '/' . $row['image'];
                            if (is_file($fileId)) {
                                $src = $assets . $siteConfig['theme'] . '/images/services/' . $siteConfig['id'] . '/' . $row['image'];
                            } else
                                $src = $assets . $siteConfig['theme'] . '/images/services/' . $row['image'];
                            ?>
                            <div class="col-sm-8">
                                <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>" class="fault-ref">
                                    <div class="fault">
                                        <div class="border-coner left"></div>
                                        <div class="fault_pic hidden-xs">
                                            <img src="<?= $src; ?>" alt="">
                                        </div>
                                        <div class="fault_title"><?= $row['title']; ?></div>
                                        <?= $row['description']; ?>                                        
                                        <div class="fault_price">
                                            <div class="border-coner left"></div>
                                            <span><span class="price-nowrap"><span><?= number_format($row['price'], 0, ' ', ' '); ?></span>&nbsp;руб.</span></span>
                                            <div class="border-coner right"></div>
                                        </div>
                                        <div class="border-coner right"></div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row">
                        <div class="col-xs-24 text-center">
                            <a href="/neispravnosti" class="all-faults">Все неисправности</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-24">
                <div class="form-block form-block__request clearfix">
                    <div class="form-block_title">Срочный ремонт день в день</div>
                    <div class="form-block_claim">Каждый случай уникален, и если вы не нашли свою поломку, получите <span style="color:#bfa16a">бесплатную консультацию</span></div>
                    <div class="form form__request dark">
                        <?php

                        use yii\helpers\Html;
                        use yii\widgets\ActiveForm;
                        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                    'id' => 'service-form',
                                    'options' => ['class' => 'request-form'],
                                    'enableClientValidation' => true,
                                    'fieldConfig' => [
                                        'template' => '{input}',
                                    ],
                        ]);
                        ?>
                        <ul>
                            
                            <li>
                                <label for="id_phone">Телефон</label>
                                <?=
                                $form->field($model, 'phone')->widget(MaskedInput::className(), [
                                    'name' => 'phone',
                                    'mask' => '+7 (999) 999-99-99',
                                    'options' => [
                                        'placeholder' => 'Телефон',
                                        'class' => 'form__input form__input_phone-mask', 'type' => 'tel',
                                        'size' => 40,
                                    ],
                                ])->label('')
                                ?>
                            </li>
                        </ul>
                        <?= Html::submitButton('Отправить', ['type' => 'submit']) ?>
                        <p class="response-message"></p>
                        <p class="form-policy">
                            Нажимая на кнопку «Перезвоните мне», вы подтверждаете своё совершеннолетие и соглашаетесь на обработку
                            персональных данных в соответствии с <a href="/conf-inform">условиями</a>.
                        </p>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>