<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_attribute}}`.
 */
class m240129_173402_create_attribute_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attribute}}', [
            'id' => $this->primaryKey(),
            'created_by' => $this->integer()->notNull(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_attribute}}');
    }
}
