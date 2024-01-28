<?php

use yii\db\Migration;
use common\models\Vendor;

/**
 * Class m240128_105708_add_vendor_table
 */
class m240128_105708_add_vendor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('vendor', [
            'username' => 'vendor',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('1q2w3e4r5t'),
           'email' => 'a@a.a',
            'status' => Vendor::STATUS_ACTIVE,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240128_105708_add_vendor_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240128_105708_add_vendor_table cannot be reverted.\n";

        return false;
    }
    */
}
