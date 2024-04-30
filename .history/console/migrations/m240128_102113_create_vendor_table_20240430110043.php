<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vendor}}`.
 */
class m240128_102113_create_vendor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vendor}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'name_uz' => $this->string(255),
            'name_ru' => $this->string(255),
            'surname_uz' => $this->string(255),
            'surname_ru' => $this->string(255),
            'fathers_name_uz' => $this->string(255),
            'fathers_name_ru' => $this->string(255),
            'role' => $this->string(255),
           
            'phone'=> $this->bigInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vendor}}');
    }
}
