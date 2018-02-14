<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SeoTemplatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seo Templates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-templates-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Seo Templates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'template',
            [
                'attribute' => 'category_id',
                'value' => 'category.title'
            ],
            [
                'label' => 'Бренд',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->brand_id === 0 ? 'Все бренды' : '';
                },
            ],
            [
                'label' => 'Модель',
                'format' => 'raw',
                'value' => function($model) {
                    return $model->model_id === 0 ? 'Все модели' : '';
                },
            ],
            'service.title',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
