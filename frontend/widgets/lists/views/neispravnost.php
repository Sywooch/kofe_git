<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
if ($siteConfig['mono'])
    $prefUrl = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $prefUrl);
?>
<section id="neispravnost">
    <div class="container">
        <p class="title"><span>Выберите </span> неисправность</p>
        <div>
            <?php foreach ($rows as $key => $row): ?>
                <div class="punkt<?= $key == 0 ? ' promo' : '' ?>">
                    <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>">
                        <div class="big-text"><?= $row['title']; ?></div>
                        <?= $row['description']; ?>
                        <div class="price">
                            <?php if ($key == 0): ?>
                                <div class="new">от <?= round($row['price']); ?> р</div>
                                <div class="old">от 1650 р</div>
                            <?php else: ?>
                                от <?= round($row['price']); ?> р
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="punkt contact">
                <div>
                    <div class="big-text">Остались вопросы?</div>
                    <p>Оставьте заявку, и наш оператор перезвонит Вам через 2 минуты.</p>
                    <?php

                    use yii\helpers\Html;
                    use yii\widgets\ActiveForm;
                    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                'id' => 'service-form',
                                'options' => ['class' => 'global-form'],
                                'enableClientValidation' => true,
                                'fieldConfig' => [
                                    'template' => '{input}',
                                ],
                    ]);
                    $position = \yii\web\View::POS_END;
                    $validatejs = "$('#service-form').on('afterValidateAttribute', function(event, attribute, messages) {
                    if(messages.length == 0){
                        yaCounter45675441.reachGoal(\"$metrika\");
                    }
                });";
                    if (!$siteConfig['mono'])
                        $this->registerJs($validatejs, $position);
                    ?> 
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Ваш телефон',
                            'class' => 'phone2', 'type' => 'tel'
                        ],
                    ])->label('Номер телефона <span class="required">*</span>')
                    ?>
                    <?= Html::submitButton('Перезвоните мне', ['class' => 'hero-form__btn', 'type' => 'button']) ?>                    
                    <?php ActiveForm::end() ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <?php if (!$siteConfig['mono']): ?><span class="more"><a href="/uslugi-i-ceny">Все услуги и цены</a></span><?php endif; ?>
    </div>
</section>