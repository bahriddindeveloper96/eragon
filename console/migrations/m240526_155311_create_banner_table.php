<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%banner}}`.
 */
class m240526_155311_create_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%banner}}', [
            'id' => $this->primaryKey(),                                
            'background' => $this->string(255)->notNull(),
            'photo' => $this->string(255)->notNull(),
            'name_uz' => $this->string()->notNull(),
            'name_ru' => $this->string()->notNull(),            
            'description_uz' => $this->text(),
            'description_ru' => $this->text(),
            'link' => $this->string()->notNull(),            
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
            'status' => $this->string()->notNull(),

        ]);
        $this->createIndex('index-photo_created_by', 'banner', 'created_by');
        $this->createIndex('index-photo_updated_by', 'banner', 'updated_by');
        $this->addForeignKey('fkey-banner_created_by', 'banner', 'created_by', 'vendor', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fkey-banner_updated_by', 'banner', 'updated_by', 'vendor', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%banner}}');
    }
}
