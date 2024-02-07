<?php

use yii\db\Migration;
use common\models\User;
/**
 * Class m240116_182604_add_user_table
 */
class m240116_182604_add_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'adm!n',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('1q2w3e4r5t'),
            'email' => 'a@a.a',
            'name' => 'Bahriddin',
            'surname' => 'Kucharov',
            'fathers_name' => 'MRX',
            'role' => 'admin',
            'phone' => '998969616',
            'status' => User::STATUS_ACTIVE,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240116_182604_add_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240116_182604_add_user_table cannot be reverted.\n";

        return false;
    }
    */
}
