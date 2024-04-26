<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payme_transaction}}`.
 */
class m240426_052531_create_payme_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%payme_transaction}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->defaultValue(null),
            'transaction_id' => $this->string(24)->notNull(),
            'state' => $this->tinyInteger(2)->notNull(),
            'amount' => $this->integer()->notNull(),
            'reason' => $this->tinyInteger(2)->defaultValue(null),
            'perform_time' => $this->bigInteger(16)->defaultValue(null),
            'cancel_time' => $this->bigInteger(16)->defaultValue(null),
            'create_time' => $this->bigInteger(16)->notNull(),
        ]);

        $this->createIndex('{{%idx-payme_transaction-transaction_id}}', '{{%payme_transaction}}', 'transaction_id', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%payme_transaction}}');
    }
}
