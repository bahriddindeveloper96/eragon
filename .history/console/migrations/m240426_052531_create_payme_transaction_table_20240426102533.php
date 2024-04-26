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
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%payme_transaction}}');
    }
}
