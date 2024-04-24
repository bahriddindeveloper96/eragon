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
        $this->batchInsert('{{%category}}', ['id', 'parent_id', 'name_uz','name_ru','description_uz','description_uz','seo_key_uz','seo_key_ru','seo_desc_uz','seo_desc_ru','created_by', 'updated_by'], [
            [8, NULL, 'Elektronika','Электроника','Elektronika','Электроника','Elektronika eragon.uz', 'Электроника uchun eragon.uz','Elektronika eragon.uz', 'Электроника uchun eragon.uz', 1, 1],
            [9, NULL, 'Maishiy texnika', 'Бытовая техника','Maishiy texnika', 'Бытовая техника','Maishiy texnikalar eragon.uz da', 'Бытовая техника для eragon.uz','Maishiy texnikalar eragon.uz da', 'Бытовая техника для eragon.uz', 1, 1],
            [10, NULL, 'Kiyim', 'Одежда','Kiyim', 'Одежда','Kiyimlar eragon.uz da', 'Одежда для eragon.uz','Kiyimlar eragon.uz da', 'Одежда для eragon.uz', 1, 1],
            [11, NULL, 'Poyabzallar', 'Обувь','Poyabzallar', 'Обувь','Poyabzallar eragon.uz da', 'Обувь для eragon.uz','Poyabzallar eragon.uz da', 'Обувь для eragon.uz', 1, 1],
            [12, NULL, 'Aksessuarlar', 'Аксессуары','Aksessuarlar', 'Аксессуары','Aksessuarlar eragon.uz da', 'Аксессуары для eragon.uz','Aksessuarlar eragon.uz da', 'Аксессуары для eragon.uz', 1, 1],
            [13, NULL, 'Go\'zallik va parvarish', 'Красота и уход','Go\'zallik va parvarish', 'Красота и уход','Go\'zallik va parvarish eragon.uz da', 'Красота и уход для eragon.uz','Go\'zallik va parvarish eragon.uz da', 'Красота и уход для eragon.uz', 1, 1],
            [14, NULL, 'Salomatlik', 'Здоровье','Salomatlik', 'Здоровье','Salomatlik eragon.uz da', 'Здоровье для eragon.uz','Salomatlik eragon.uz da', 'Здоровье для eragon.uz', 1, 1],
            [15, NULL, 'Uy-ro\'zg\'or buyumlari', 'Товары для дома','Uy-ro\'zg\'or buyumlari', 'Товары для дома','Uy-ro\'zg\'or buyumlari eragon.uz da', 'Товары для дома для eragon.uz','Товары для дома','Uy-ro\'zg\'or buyumlari eragon.uz da', 'Товары для дома для eragon.uz', 1, 1],
            [16, NULL, 'Qurilish va ta\'mirlash', 'Строительство и ремонт', 1, 1],
            [17, NULL, 'Автотовары', 'Автотовары', 1, 1],
            [18, NULL, 'Детские товары', 'Детские товары', 1, 1],
            [19, NULL, 'Спорт и отдых', 'Спорт и отдых', 1, 1],
            [20, NULL, 'Канцтовары', 'Канцтовары', 1, 1],
            [21, NULL, 'Книги', 'Книги', 1, 1],
            [22, 8, 'Смартфоны и телефоны', 'Смартфоны и телефоны', 1, 1],
            [23, 8, 'Умные часы и фитнес браслеты', 'Умные часы и фитнес браслеты', 1, 1],
            [24, 8, 'Ноутбуки и планшеты', 'Ноутбуки и планшеты', 1, 1],
            [25, 8, 'Компьютерная техника', 'Компьютерная техника', 1, 1],
            [26, 8, 'Наушники и аудиотехника', 'Наушники и аудиотехника', 1, 1],
            [27, 8, 'Фото и видеотехника', 'Фото и видеотехника', 1, 1],
            [28, 8, 'Часы и электронные будильники', 'Часы и электронные будильники', 1, 1],
            [29, 8, 'Умный дом и безопасность', 'Умный дом и безопасность', 1, 1],
            [30, 8, 'Телевизоры и видеотехника', 'Телевизоры и видеотехника', 1, 1],
            [31, 8, 'Аксессуары для электроники', 'Аксессуары для электроники', 1, 1],
            [32, 22, 'Аксессуары для смартфонов', 'Аксессуары для смартфонов', 1, 1],
            [33, 22, 'Смартфоны', 'Смартфоны', 1, 1],
            [34, 22, 'Кнопочные телефоны', 'Кнопочные телефоны', 1, 1],
            [35, 22, 'Запчасти и ремонт', 'Запчасти и ремонт', 1, 1],
            [36, 22, 'Стационарные телефоны', 'Стационарные телефоны', 1, 1],
            [37, 23, 'Умные часы', 'Умные часы', 1, 1],
            [38, 23, 'Ремешки', 'Ремешки', 1, 1],
            [39, 23, 'Фитнес браслеты', 'Фитнес браслеты', 1, 1],
            [40, 23, 'Кабели и зарядные устройства', 'Кабели и зарядные устройства', 1, 1],
            [41, 23, 'Умные гаджеты', 'Умные гаджеты', 1, 1],
            [42, 24, 'Ноутбуки', 'Ноутбуки', 1, 1],
            [43, 24, 'Планшеты', 'Планшеты', 1, 1],
            [44, 24, 'Аксессуары', 'Аксессуары', 1, 1],
            [45, 24, 'Электронные книги', 'Электронные книги', 1, 1],
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
