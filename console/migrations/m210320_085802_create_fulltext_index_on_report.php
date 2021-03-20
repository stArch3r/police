<?php

use yii\db\Migration;

/**
 * Class m210320_085802_create_fulltext_index_on_report
 */
class m210320_085802_create_fulltext_index_on_report extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE {{%report}} ADD FULLTEXT(title, tags)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210320_085802_create_fulltext_index_on_report cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210320_085802_create_fulltext_index_on_report cannot be reverted.\n";

        return false;
    }
    */
}
