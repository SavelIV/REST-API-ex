<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this    yii\web\View */
/* @var $product common\models\Product */

?>

<?php $form = ActiveForm::begin([
    'id'                     => 'product-form',
    'enableClientValidation' => false,
    'validateOnBlur'         => false
]); ?>
<div class="panel-body">
    <div class="row">
        <div class="col-sm-12">
            <?php echo $form->field($product, 'title')->textInput(['maxlength' => true]); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php echo $form->field($product, 'description')->textInput(['maxlength' => true]); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <?php echo $form->field($product, 'price')->textInput(['type' => 'number', 'min' => 0, 'step' => 1]); ?>
        </div>
    </div>
</div>
<hr>
<div class="panel-footer text-right clearfix">
    <?php if (!$product->isNewRecord) {
        echo Html::a(Yii::t('app', 'Удалить'), ['/products/delete', 'id' => $product->product_id], [
            'class'        => 'btn btn-danger btn-labeled ti-trash pull-left',
            'data-confirm' => 'Вы уверены, что хотите удалить продукт?',
            'data-method'  => 'post'
        ]);
    } ?>
    <?php echo Html::a(Yii::t('app', 'Отменить'), Yii::$app->request->referrer, ['class' => 'btn btn-default']); ?>
    <?php echo Html::submitButton($product->isNewRecord ? Yii::t('app', 'Создать') : Yii::t('app', 'Сохранить'), ['class' => $product->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
</div>
<?php ActiveForm::end(); ?>
