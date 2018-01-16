<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SeoTemplates */

$this->title = 'Create Seo Templates';
$this->params['breadcrumbs'][] = ['label' => 'Seo Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-templates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
