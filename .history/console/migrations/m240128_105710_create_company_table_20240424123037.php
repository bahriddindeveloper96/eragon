<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%company}}`.
 */
class m240128_105710_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%company}}', [
            'id' => $this->primaryKey(),
            //'region_id' => $this->integer(),
            'name_uz' => $this->string()->notNull(),
            'name_ru' => $this->string()->notNull(),
            'inn' => $this->integer(),
            //'type' => $this->string(),
            'phone' => $this->bigInteger(),
           // 'link' => $this->string(),
            'address' => $this->string(),

            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
            'created_at' => $this->integer()->unsigned()->notNull(),
            'updated_at' => $this->integer()->unsigned()->notNull(),
        ]);

        $this->createIndex('index-company-created_by', 'company', 'created_by');
        $this->createIndex('index-company-updated_by', 'company', 'updated_by');
        $this->addForeignKey('fkey-company-created_by', 'company', 'created_by', 'vendor', 'id', 'CASCADE', 'RESTRICT');
        $this->addForeignKey('fkey-company-updated_by', 'company', 'updated_by', 'vendor', 'id', 'CASCADE', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%company}}');
    }
}
