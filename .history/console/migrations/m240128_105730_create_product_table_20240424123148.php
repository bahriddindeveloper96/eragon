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
            'name_uz' => $this->string()->notNull(),
            'name_ru' => $this->string()->notNull(),
            'content_uz' => $this->text(),
            'content_ru' => $this->text(),
            'description_uz' => $this->text(),
            'description_ru' => $this->text(),
            'price' => $this->string(),
            'old_price' => $this->string(),
            
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
        $this->createIndex('index-product_created_by', 'product', 'created_by');
        $this->createIndex('index-product_updated_by', 'product', 'updated_by');
        $this->createIndex('index-product_category_id', 'product', 'category_id');
        $this->createIndex('index-product_company_id', 'product', 'company_id');
        

      $this->addForeignKey('fkey-product_created_by', 'product', 'created_by', 'vendor', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fkey-product_updated_by', 'product', 'updated_by', 'vendor', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fkey-product_category_id', 'product', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fkey-product_company_id', 'product', 'company_id', 'company', 'id', 'CASCADE', 'CASCADE');
      
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
