<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
$elements = \Yii::$app->db->createCommand('select id,parent, title from {{%pages}}')->queryAll();
$services = \Yii::$app->db->createCommand('select id, title from {{%services}}')->queryAll();
foreach ($services as $service) {
    $data[$service['id']] = $service['title'];
}
$model = new \app\models\Pages();
$tree = $model->build_tree($elements);
unset($elements);
$this->registerJs("$(document).ready(function () {
        $('#pages-parent').on('change', function () {
            var id = $(this).val();
            $.get('/services/get-links', {id: id}, function(resp) {
                $('#result').html(resp);
            });
        });
        $('#add-service').on('click', function() {
            var id = $('#service').val();
            $.get('/services/get-row', {id: id}, function(resp) {
				//var result = $(resp).filter('.service-title');
				//console.log(result);
                $('.table tr:last').after(resp);
            });            
        });
		$('body').on('click', '.delete-service', function() {
			var el = $(this).parent('td').parent('tr');
			el.remove();
		});	
		$('body').on('click', '#save-services', function() {
			
			var inputs = $('#linking-form .price');
			var values = {};
			inputs.each(function() {
				values[this.name] = $(this).val();
			});
			
			$.post('/services/save-services', $('#linking-form').serialize(), function(resp) {
				
            });
		});
    });", yii\web\View::POS_END, 'my-options');
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(['id' => 'linking-form']); ?>
    <?=
    $form->field($model, 'parent')->widget(Select2::classname(), [
        'data' => $tree,
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <div id="result"></div>

    <div class="form-group">
        <?=
        Select2::widget([
            'name' => 'service',
            'value' => '',
            'data' => $data,
            'options' => ['multiple' => FALSE, 'placeholder' => 'Select service ...', 'id' => 'service']
        ]);
        ?><br>
        <?= Html::button('+', ['class' => 'btn btn-success', 'id' => 'add-service']) ?>
    </div>

    <div class="form-group">
        <?= Html::button('Save', ['class' => 'btn btn-success', 'id' => 'save-services']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
