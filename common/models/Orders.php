<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property float $total_price
 * @property int $status
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string|null $transaction_id
 * @property int|null $created_at
 * @property int|null $created_by
 *
 * @property User $createdBy
 * @property OrderAddresses $orderAddresses
 * @property OrderItems[] $orderItems
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total_price', 'status', 'firstname', 'lastname', 'email'], 'required'],
            [['total_price'], 'number'],
            [['status', 'created_at', 'created_by'], 'integer'],
            [['firstname', 'lastname'], 'string', 'max' => 45],
            [['email', 'transaction_id'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'total_price' => 'Total Price',
            'status' => 'Status',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'transaction_id' => 'Transaction ID',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * Gets query for [[OrderAddresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderAddresses()
    {
        return $this->hasOne(OrderAddresses::class, ['order_id' => 'id']);
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::class, ['order_id' => 'id']);
    }
}
