<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\OrderAddresses $model */

$this->title = 'Update Order Addresses: ' . $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_id, 'url' => ['view', 'order_id' => $model->order_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-addresses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
