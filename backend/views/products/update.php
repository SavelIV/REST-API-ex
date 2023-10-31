<?php
use yii\helpers\Html;

/* @var $this    yii\web\View */
/* @var $product common\models\Product */

$this->title = Yii::t('app', 'Редактирование продукта: {0}', [$product->title]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Продукты'), 'url' => ['/products/index']];
$this->params['breadcrumbs'][] = ['label' => $product->title];
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo Html::encode($this->title); ?></h3>
    </div>
    <?php echo $this->render('_form', [
        'product' => $product
    ]); ?>
</div>
