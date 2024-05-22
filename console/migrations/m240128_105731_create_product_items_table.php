<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_items}}`.
 */
class m240128_105731_create_product_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_items}}', [
            'id' => $this->primaryKey(),           
            'product_id' => $this->integer(),
            'color_id' => $this->integer(),
            'price' => $this->string(),
            'old_price' => $this->string(),            
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
        $this->createIndex('index-product-items_created_by', 'product_items', 'created_by');
        $this->createIndex('index-product-items_updated_by', 'product_items', 'updated_by');
        $this->createIndex('index-product-items_product_id', 'product_items', 'product_id');
         $this->createIndex('index-product-items_color_id', 'product_items', 'color_id');
      $this->addForeignKey('fkey-product-items_created_by', 'product_items', 'created_by', 'vendor', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fkey-product-items_updated_by', 'product_items', 'updated_by', 'vendor', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fkey-product-items_product_id', 'product_items', 'product_id', 'product', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fkey-product-items_color_id', 'product_items', 'color_id', 'color', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_items}}');
    }
}
