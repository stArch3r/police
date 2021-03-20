<?php

use yii\db\Migration;

/**
 * Class m210320_084151_create_fulltext_index_on_report
 */
class m210320_084151_create_fulltext_index_on_report extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
            $this->execute("ALTER TABLE {{%report}} ADD FULLTEXT(title,county, tags)");
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    
    {
        echo "m210320_084151_create_fulltext_index_on_report cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210320_084151_create_fulltext_index_on_report cannot be reverted.\n";

        return false;
    }
    */
}
