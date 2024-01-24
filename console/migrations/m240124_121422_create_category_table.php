<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m240124_121422_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),            
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
                     
            
        ]);
         $this->createIndex('index-category_created_by', 'category', 'created_by');
          $this->createIndex('index-category_updated_by', 'category', 'updated_by');
        $this->addForeignKey('fkey-category_created_by', 'category', 'created_by', 'user', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('fkey-category_updated_by', 'category', 'updated_by', 'user', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
