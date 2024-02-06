<?php

use yii\db\Migration;

/**
 * Class m240206_125121_update_vendor_table
 */
class m240206_125121_update_vendor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("vendor", "name", $this->string(255));
         $this->addColumn("vendor", "surname", $this->string(255));
         $this->addColumn("vendor", "fathers_name", $this->string(255));
         $this->addColumn("vendor", "role", $this->string(255));
         $this->addColumn("vendor", "phone", $this->bigInteger());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240206_125121_update_vendor_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240206_125121_update_vendor_table cannot be reverted.\n";

        return false;
    }
    */
}
