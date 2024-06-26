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
            [14, NULL, 'Salomatlik', 'Здоровье','Salomatlik', 'Здоровье','Salomatlik eragon.uz da', 'Здоровье для eragon.uz','Salomatlik eragon.uz da', 'Здоровье для eragon.uz', 1, 1],            
            [17, NULL, 'Avto tovarlar', 'Автотовары','Avto tovarlar', 'Автотовары','Avto tovarlar eragon.uz da', 'Автотовары для eragon.uz','Avto tovarlar eragon.uz da', 'Автотовары для eragon.uz', 1, 1],
            [18, NULL, 'Bolalar tovarlari', 'Детские товары','Bolalar tovarlari', 'Детские товары','Bolalar tovarlari eragon.uz da', 'Детские товары для eragon.uz','Bolalar tovarlari eragon.uz da', 'Детские товары для eragon.uz', 1, 1],
            [19, NULL, 'Sport va hordiq', 'Спорт и отдых','Sport va hordiq', 'Спорт и отдых','Sport va hordiq eragon.uz da', 'Спорт и отдых для eragon.uz','Sport va hordiq eragon.uz da', 'Спорт и отдых для eragon.uz', 1, 1],
            [20, NULL, 'Kanstovarlar', 'Канцтовары','Kanstovarlar', 'Канцтовары','Kanstovarlar eragon.uz da', 'Канцтовары для eragon.uz','Kanstovarlar eragon.uz da', 'Канцтовары для eragon.uz', 1, 1],
            [21, NULL, 'Kitoblar', 'Книги','Kitoblar', 'Книги','Kitoblar eragon.uz da', 'Книги для eragon.uz','Kitoblar eragon.uz da', 'Книги для eragon.uz', 1, 1],
            [22, 8, 'Smartfonlar va telefonlar', 'Смартфоны и телефоны','Smartfonlar va telefonlar', 'Смартфоны и телефоны','Smartfonlar va telefonlar eragon.uz da', 'Смартфоны и телефоны для eragon.uz','Smartfonlar va telefonlar eragon.uz da', 'Смартфоны и телефоны для eragon.uz', 1, 1],
            [23, 8, 'Aqlli soatlar va fitnes bilaguzuklar', 'Умные часы и фитнес браслеты','Aqlli soatlar va fitnes bilaguzuklar', 'Умные часы и фитнес браслеты','Aqlli soatlar va fitnes bilaguzuklar eragon.uz da', 'Умные часы и фитнес браслеты для eragon.uz','Aqlli soatlar va fitnes bilaguzuklar eragon.uz da', 'Умные часы и фитнес браслеты для eragon.uz', 1, 1],
            [24, 8, 'Notebuk va platshetlar', 'Ноутбуки и планшеты','Notebuk va platshetlar', 'Ноутбуки и планшеты','Notebuk va platshetlar eragon.uz da', 'Ноутбуки и планшеты для eragon.uz','Notebuk va platshetlar eragon.uz da', 'Ноутбуки и планшеты для eragon.uz', 1, 1],
            [25, 8, 'Kompyuter texnikasi', 'Компьютерная техника','Kompyuter texnikasi', 'Компьютерная техника','Kompyuter texnikasi eragon.uz da', 'Компьютерная техника для eragon.uz','Kompyuter texnikasi eragon.uz da', 'Компьютерная техника для eragon.uz', 1, 1],
            [26, 8, 'Quloqchinlar va audio texnika', 'Наушники и аудиотехника','Quloqchinlar va audio texnika', 'Наушники и аудиотехника','Quloqchinlar va audio texnika eragon.uz da', 'Наушники и аудиотехника для eragon.uz','Quloqchinlar va audio texnika eragon.uz da', 'Наушники и аудиотехника для eragon.uz', 1, 1],
            [27, 8, 'Foto va video texnika', 'Фото и видеотехника','Foto va video texnika', 'Фото и видеотехника','Foto va video texnika eragon.uz da', 'Фото и видеотехника для eragon.uz','Foto va video texnika eragon.uz da', 'Фото и видеотехника для eragon.uz', 1, 1],
            [28, 8, 'Soatlar va elektron budilniklar', 'Часы и электронные будильники','Soatlar va elektron budilniklar', 'Часы и электронные будильники','Soatlar va elektron budilniklar eragon.uz da', 'Часы и электронные будильники для eragon.uz','Soatlar va elektron budilniklar eragon.uz da', 'Часы и электронные будильники для eragon.uz', 1, 1],
            [30, 8, 'Televizorlar va videotexnika', 'Телевизоры и видеотехника','Televizorlar va videotexnika', 'Телевизоры и видеотехника','Televizorlar va videotexnika eragon.uz da', 'Телевизоры и видеотехника для eragon.uz','Televizorlar va videotexnika eragon.uz da', 'Телевизоры и видеотехника для eragon.uz', 1, 1],
            [32, 22, 'Smartfon uchun aksessuar', 'Аксессуары для смартфонов','Smartfon uchun aksessuar', 'Аксессуары для смартфонов','Smartfon uchun aksessuar eragon.uz da', 'Аксессуары для смартфонов для eragon.uz','Smartfon uchun aksessuar eragon.uz da', 'Аксессуары для смартфонов для eragon.uz', 1, 1],
            [33, 22, 'Smartfonlar', 'Смартфоны','Smartfonlar', 'Смартфоны','Smartfonlar eragon.uz da', 'Смартфоны для eragon.uz','Smartfonlar eragon.uz da', 'Смартфоны для eragon.uz', 1, 1],
            [40, 23, 'Kabel va zaryadlovchi qurilmalar', 'Кабели и зарядные устройства','Kabel va zaryadlovchi qurilmalar', 'Кабели и зарядные устройства','Kabel va zaryadlovchi qurilmalar eragon.uz da', 'Кабели и зарядные устройства для eragon.uz','Kabel va zaryadlovchi qurilmalar eragon.uz da', 'Кабели и зарядные устройства для eragon.uz', 1, 1],
            [45, 24, 'Elektron kitoblar', 'Электронные книги','Elektron kitoblar', 'Электронные книги','Elektron kitoblar eragon.uz da', 'Электронные книги для eragon.uz','Elektron kitoblar eragon.uz da', 'Электронные книги для eragon.uz', 1, 1],
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