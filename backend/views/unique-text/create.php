<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UniqueText */

$this->title = 'Create Unique Text';
$this->params['breadcrumbs'][] = ['label' => 'Unique Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unique-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
