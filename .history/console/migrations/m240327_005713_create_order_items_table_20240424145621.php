<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_items}}`.
 */
class m240327_005713_create_order_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_items}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'name_uz' => $this->string()->notNull(),
            'name_ru' => $this->string()->notNull(),
            'surname' => $this->string()->notNull(),
            'price' => $this->float(),
            'qty_item' => $this->integer(11)->notNull(),
            'sum_item' => $this->float(),

        ]);
        $this->createIndex('index-order_items_order_id', 'order_items', 'order_id');
        $this->createIndex('index-order_items_product_id', 'order_items', 'product_id');       
        $this->addForeignKey('fkey-order_items_order_id', 'order_items', 'order_id', 'order', 'id', 'CASCADE', 'CASCADE');        
        $this->addForeignKey('fkey-order_items_product_id', 'order_items', 'product_id', 'product', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_items}}');
    }
}
