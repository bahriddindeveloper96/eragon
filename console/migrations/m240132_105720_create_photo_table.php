<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%photo}}`.
 */
class m240132_105720_create_photo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%photo}}', [
            'id' => $this->primaryKey(),           
            'product_items_id' => $this->integer()->notNull(),                       
            'photo' => $this->string(255)->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
        $this->createIndex('index-photo_created_by', 'photo', 'created_by');
        $this->createIndex('index-photo_updated_by', 'photo', 'updated_by');
      //  $this->createIndex('index-photo-product_value', 'photo', 'product_value');
        $this->createIndex('index-photo-product_items', 'photo', 'product_items_id');
        $this->addForeignKey('fkey-photo_created_by', 'photo', 'created_by', 'vendor', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fkey-photo_updated_by', 'photo', 'updated_by', 'vendor', 'id', 'CASCADE', 'CASCADE');
      //  $this->addForeignKey('fkey-photo_product_value', 'photo', 'product_value', 'product_value', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('fkey-photo_product_items', 'photo', 'product_items_id', 'product_items', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%photo}}');
    }
}
