<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\OrderItemsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-items-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'unit_price') ?>

    <?= $form->field($model, 'order_id') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
