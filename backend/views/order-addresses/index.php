<?php

use common\models\OrderAddresses;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\search\OrderAddressesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Order Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-addresses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order Addresses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'address',
            'city',
            'state',
            'country',
            //'zipcode',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OrderAddresses $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'order_id' => $model->order_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
