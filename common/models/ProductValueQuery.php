<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ProductValue]].
 *
 * @see ProductValue
 */
class ProductValueQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ProductValue[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ProductValue|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
