<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m240327_002947_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'qty' => $this->integer(11)->notNull(),
            'sum' => $this->float(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'name_uz' => $this->string()->notNull(),
            'name_ru' => $this->string()->notNull(),
            'surname_uz' => $this->string()->notNull(),
            'surname_ru' => $this->string()->notNull(),
            'email' => $this->string(),
            'phone' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'address2' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
