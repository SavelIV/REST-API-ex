<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this         yii\web\View */
/* @var $searchModel  common\models\searchers\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Товары');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo Html::encode($this->title); ?></h3>
    </div>
    <?php echo GridView::widget([
        'dataProvider'     => $dataProvider,
        'filterModel'      => $searchModel,
        'layout'           => "{items}\n{pager}",
        'emptyTextOptions' => ['style' => 'text-align: center;'],
        'columns'          => [
            [
                'class'          => 'yii\grid\SerialColumn',
                'headerOptions'  => [
                    'class' => 'text-center',
                    'style' => 'width: 40px;'
                ],
                'contentOptions' => [
                    'class' => 'text-center'
                ]
            ],
            [
                'attribute' => 'title',
                'value'     => function ($model) {
                    return $model->title;
                }
            ],
            [
                'attribute' => 'description',
                'value'     => function ($model) {
                    return $model->description ?: 'Не указано';
                }
            ],
            [
                'attribute'     => 'price',
                'value'         => function ($model) {
                    return $model->price ?: 'Не указана';
                },
                'headerOptions' => ['style' => 'width: 5%;']
            ]
        ]
    ]); ?>
</div>