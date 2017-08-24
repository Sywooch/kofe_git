<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$assets = Yii::getAlias('@web');
$this->title = $page['meta_title'];
$count = count($yurCats);
?>
<div class="container">    
    <div class="page__in">             
        <aside class="sidebar">
            <div class="widget">
                <?= \app\widgets\lists\LastNews::widget(); ?>
            </div>
        </aside>    
        <section class="main-content">
            <div class="tabs global-tabs">
                <ul class="tabs-nav">
                    <li class="active">
                        <a href="#individuals" data-toggle="tab">Для физических лиц</a>
                    </li>
                    <li>
                        <a href="#legal" data-toggle="tab">Для юридических лиц</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="individuals">  
                        <?php foreach ($fizCats as $cat): ?>                            
                            <?= app\widgets\lists\Price::widget(['title' => $cat['title'], 'page_id' => $cat['id'], 'showModal' => false]); ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="tab-pane" id="legal">
                        <?php foreach ($yurCats as $key => $cat): ?>                            
                            <?= app\widgets\lists\Price::widget(['title' => $cat['title'], 'page_id' => $cat['id'], 'showModal' => false]); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?= app\widgets\forms\Feedback::widget(); ?> 
        </section>
    </div>
</div> 
<!-- modal Start -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-content__in">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h3>Заказать услугу</h3>
                <p>
                    Хотите заказать услугу <strong id="service-name">оформление наследства</strong>? Оставьте свой 
                    телефон и с вами свяжутся в течение 15 минут для <strong>бесплатной консультации</strong>
                </p>
                <?php
                $form = ActiveForm::begin([
                            'id' => 'services-form',
                            'options' => ['class' => 'global-form'],
                            'fieldConfig' => [
                                'template' => '{input}',
                            ],
                        ])
                ?>
                <fieldset>
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Ваш телефон'
                        ],
                    ])
                    ?>
                </fieldset>
                <!--<fieldset>
                <?= $form->field($model, 'msg')->textArea(['placeholder' => 'Текст']) ?>
                </fieldset>-->
                <fieldset>
                    <?= Html::submitInput('Отправить') ?>
                </fieldset>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->