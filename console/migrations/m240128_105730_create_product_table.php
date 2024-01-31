<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m240128_105730_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),           
            'category_id' => $this->integer(),
            'company_id' => $this->integer(), 
            'photo_id' => $this->integer(),           
            'name' => $this->string()->notNull(),
            'content' => $this->text(),
            'description' => $this->text(),
            'price' => $this->string(),
            'old_price' => $this->string(),
            
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
        $this->createIndex('index-product_created_by', 'product', 'created_by');
        $this->createIndex('index-product_updated_by', 'product', 'updated_by');
        $this->createIndex('index-product_category_id', 'product', 'category_id');
        $this->createIndex('index-product_company_id', 'product', 'company_id');
        

      $this->addForeignKey('fkey-product_created_by', 'product', 'created_by', 'vendor', 'id', 'RESTRICT', 'RESTRICT');
      $this->addForeignKey('fkey-product_updated_by', 'product', 'updated_by', 'vendor', 'id', 'RESTRICT', 'RESTRICT');
      $this->addForeignKey('fkey-product_category_id', 'product', 'category_id', 'category', 'id', 'RESTRICT', 'RESTRICT');
      $this->addForeignKey('fkey-product_company_id', 'product', 'company_id', 'company', 'id', 'RESTRICT', 'RESTRICT');
      
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
