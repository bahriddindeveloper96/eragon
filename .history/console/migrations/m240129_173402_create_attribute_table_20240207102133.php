<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_attribute}}`.
 */
class m240129_173402_create_attribute_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attribute}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string(),
        ]);
        $this->createIndex('index-company-updated_by', 'company', 'updated_by');
        $this->addForeignKey('fkey-company-created_by', 'company', 'created_by', 'vendor', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_attribute}}');
    }
}
