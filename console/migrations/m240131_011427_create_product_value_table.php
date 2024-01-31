<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_value}}`.
 */
class m240131_011427_create_product_value_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_value}}', [
            'id' => $this->primaryKey(),
            'attribute_id' => $this->integer(),
            'name' => $this->string(),
            'product_id' => $this->integer(),
            'photo_id' => $this->integer(),     
            
        ]);
        $this->createIndex('index-product_value_attribute_id', 'product_value', 'attribute_id');
        $this->createIndex('index-product_value_product_id', 'product_value', 'product_id');
        $this->createIndex('index-product_value_photo_id', 'product', 'photo_id');
        $this->addForeignKey('fkey-product_value_attribute_id', 'product_value', 'attribute_id', 'product_attribute', 'id', 'CASCADE', 'CASCADE');        
        $this->addForeignKey('fkey-product_value_product_id', 'product_value', 'product_id', 'product', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fkey-product_value_photo_id', 'product', 'photo_id', 'photo', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_value}}');
    }
}
