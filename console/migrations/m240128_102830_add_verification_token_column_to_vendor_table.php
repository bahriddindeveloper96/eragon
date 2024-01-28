<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%vendor}}`.
 */
class m240128_102830_add_verification_token_column_to_vendor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%vendor}}', 'verification_token', $this->string()->defaultValue(null));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%vendor}}', 'verification_token');
    }
}
