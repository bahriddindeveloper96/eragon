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
        $this->createTable('{{%category_attribute}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
        ]);
        $this->createIndex('index-attribute-category', 'category_attribute', 'category_id');
        $this->addForeignKey('fkey-attribute-category', 'category_attribute', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_attribute}}');
    }
}
