<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\OrderAddresses $model */

$this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-addresses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'order_id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'order_id' => $model->order_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'order_id',
            'address',
            'city',
            'state',
            'country',
            'zipcode',
        ],
    ]) ?>

</div>
