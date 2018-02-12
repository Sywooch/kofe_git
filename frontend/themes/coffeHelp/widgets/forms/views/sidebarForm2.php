<div class="col-xs-3 right-gl-form">
    <section class="section_promo_form">
        <div class="tb_sidebar_cont">
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'main-page-form',
                        'options' => ['class' => 'tb_sidebar_form'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [
                            'template' => '{input}',
                        ],
            ]);
            $controller = Yii::$app->controller;
            $default_controller = Yii::$app->defaultRoute;
            $isHome = (($controller->id === $default_controller) && ($controller->action->id === $controller->defaultAction)) ? true : false;
            ?>
            <?php if (!$isHome): ?>
                <span class="tb_sidebar_title">
                    <ul class="content__container__list">
                        <li class="content__container__list__item">Бесплатная доставка</li>
                        <li class="content__container__list__item">Оперативный ремонт</li>
                        <li class="content__container__list__item">Устранение неисправностей</li>
                        <li class="content__container__list__item">Бесплатная диагностика</li>
                    </ul>
                </span>
            <?php else: ?>
                <span class="tb_sidebar_title gl"><?= $title; ?></span>
            <?php endif; ?>
            <p><?= $desc; ?></p>
            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => '+7 (___) ___-__-__',
                    'type' => 'tel',
                ],
            ])->label('')
            ?>
            <?= Html::submitInput('Отправить', ['class' => 'call-master', 'type' => 'submit']) ?>
            <span class="tb_sidebar_extra_text"><?= $times; ?></span>
            <?php ActiveForm::end() ?>
        </div>
    </section>
</div>