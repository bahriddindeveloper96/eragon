<?php

use yii\db\Migration;

/**
 * Class m240206_104340_add_user_table
 */
class m240206_104340_add_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->addColumn("user", "name", $this->string(255));
         $this->addColumn("user", "surname", $this->integer());
         $this->addColumn("pro_instructions", "program_type", $this->integer());
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
