<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_attribute}}`.
 */
class m240129_173402_create_category_attribute_table extends Migration
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
        $this->createIndex('index-attribute-category', 'attribute', 'category_id');
        $this->addForeignKey('fkey-attribute-category', 'attribute', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_attribute}}');
    }
}
