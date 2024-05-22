<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%brand}}`.
 */
class m240128_105712_create_brand_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%brand}}', [
            'id' => $this->primaryKey(), 
            'name_uz' => $this->string(),           
            'name_ru' => $this->string(),
            'icon' => $this->string(), 
            'description' =>$this->string(), 
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
        $this->createIndex('index-brand_created_by', 'brand', 'created_by');
        $this->createIndex('index-brand_updated_by', 'brand', 'updated_by');       
      $this->addForeignKey('fkey-brand_created_by', 'brand', 'created_by', 'vendor', 'id', 'CASCADE', 'CASCADE');
      $this->addForeignKey('fkey-brand_updated_by', 'brand', 'updated_by', 'vendor', 'id', 'CASCADE', 'CASCADE');      
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%brand}}');
    }
}
