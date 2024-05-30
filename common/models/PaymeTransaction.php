<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payme_transaction".
 *
 * @property int $id
 * @property int|null $order_id
 * @property string $transaction_id
 * @property int $state
 * @property int $amount
 * @property int|null $reason
 * @property int|null $perform_time
 * @property int|null $cancel_time
 * @property int $create_time
 */
class PaymeTransaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payme_transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'state', 'amount', 'reason', 'perform_time', 'cancel_time', 'create_time'], 'integer'],
            [['transaction_id', 'state', 'amount', 'create_time'], 'required'],
            [['transaction_id'], 'string', 'max' => 24],
            [['transaction_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'order_id' => Yii::t('app', 'Order ID'),
            'transaction_id' => Yii::t('app', 'Transaction ID'),
            'state' => Yii::t('app', 'State'),
            'amount' => Yii::t('app', 'Amount'),
            'reason' => Yii::t('app', 'Reason'),
            'perform_time' => Yii::t('app', 'Perform Time'),
            'cancel_time' => Yii::t('app', 'Cancel Time'),
            'create_time' => Yii::t('app', 'Create Time'),
        ];
    }
}
