<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%color}}`.
 */
class m240128_105711_create_color_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%color}}', [
            'id' => $this->primaryKey(), 
            'name_uz' => $this->string(),           
            'name_ru' => $this->string(),
            'icon' => $this->string(),            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%color}}');
    }
}
