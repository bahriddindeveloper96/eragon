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
            [9, NULL, 'Maishiy texnika', 'Бытовая техника','Maishiy texnika', 'Бытовая техника','Maishiy texnikalar eragon.uz da', 'Бытовая техника для eragon.uz','Maishiy texnikalar eragon.uz da', 'Бытовая техника для eragon.uz', 1, 1],
            [10, NULL, 'Kiyim', 'Одежда','Kiyim', 'Одежда','Kiyimlar eragon.uz da', 'Одежда для eragon.uz','Kiyimlar eragon.uz da', 'Одежда для eragon.uz', 1, 1],
            [11, NULL, 'Poyabzallar', 'Обувь','Poyabzallar', 'Обувь','Poyabzallar eragon.uz da', 'Обувь для eragon.uz','Poyabzallar eragon.uz da', 'Обувь для eragon.uz', 1, 1],
            [12, NULL, 'Aksessuarlar', 'Аксессуары','Aksessuarlar', 'Аксессуары','Aksessuarlar eragon.uz da', 'Аксессуары для eragon.uz','Aksessuarlar eragon.uz da', 'Аксессуары для eragon.uz', 1, 1],
            
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