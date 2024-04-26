<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 */
class m240426_052939_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'source' => $this->string(24)->notNull(),
            'source_id' => $this->integer(11)->notNull(),
            'amount' => $this->integer()->notNull(),
            'type' => $this->string(24)->notNull(),
            'details' => $this->text(),
            'create_time' => $this->bigInteger(16)->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-transaction-user_id}}',
            '{{%transaction}}',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            '{{%fk-transaction-user_id}}',
            '{{%transaction}}',
            'user_id',
            '{{%user}}',
            'id',
            'NO ACTION',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         // drops foreign key for table `user`
        $this->dropForeignKey(
            '{{%fk-transaction-user_id}}',
            '{{%transaction}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-transaction-user_id}}',
            '{{%transaction}}'
        );

        $this->dropTable('{{%transaction}}');
    }
}
