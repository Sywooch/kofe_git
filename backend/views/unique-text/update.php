<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UniqueText */

$this->title = 'Update Unique Text: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Unique Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unique-text-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
