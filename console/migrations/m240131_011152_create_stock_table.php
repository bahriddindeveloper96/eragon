<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stock}}`.
 */
class m240131_011152_create_stock_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stock}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),            
            'quantity' => $this->integer(),
        ]);
        $this->createIndex('index-stock_product_id', 'stock', 'product_id');
        $this->addForeignKey('fkey-stock_product_id', 'stock', 'product_id', 'product', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%stock}}');
    }
}
