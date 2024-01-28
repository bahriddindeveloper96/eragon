<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%photo}}`.
 */
class m240128_105720_create_photo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%photo}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
            'photo' => $this->string(255)->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
        $this->createIndex('index-photo_created_by', 'photo', 'created_by');
        $this->createIndex('index-photo_updated_by', 'photo', 'updated_by');
        $this->addForeignKey('fkey-photo_created_by', 'photo', 'created_by', 'vendor', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('fkey-photo_updated_by', 'photo', 'updated_by', 'vendor', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%photo}}');
    }
}
