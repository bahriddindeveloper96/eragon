<?php

use yii\db\Migration;

/**
 * Class m240312_020125_add_category
 */
class m240312_020125_add_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%category}}', ['id', 'parent_id', 'name_uz','name_ru','description_uz','description_ru','seo_key_uz','seo_key_ru','seo_desc_uz','seo_desc_ru','created_by', 'updated_by'], [
            [8, NULL, 'Elektronika','Электроника','Elektronika','Электроника','Elektronika eragon.uz', 'Электроника uchun eragon.uz','Elektronika eragon.uz', 'Электроника uchun eragon.uz', 1, 1],
            
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240312_020125_add_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240312_020125_add_category cannot be reverted.\n";

        return false;
    }
    */
}