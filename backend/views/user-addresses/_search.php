<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\UserAddressesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-addresses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'zipcode') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
