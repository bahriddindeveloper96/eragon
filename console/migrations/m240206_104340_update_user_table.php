<?php

use yii\db\Migration;

/**
 * Class m240206_104340_add_user_table
 */
class m240206_104340_update_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("user", "name", $this->string(255));
         $this->addColumn("user", "surname", $this->string(255));
         $this->addColumn("user", "fathers_name", $this->string(255));
         $this->addColumn("user", "role", $this->string(255));
         $this->addColumn("user", "phone", $this->bigInteger());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240206_104340_add_user_table cannot be reverted.\n";

        return false;
    }
    */
}
