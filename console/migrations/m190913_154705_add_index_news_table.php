<?php

use yii\db\Migration;

/**
 * Class m190913_154705_add_index_news_table
 */
class m190913_154705_add_index_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE news add FULLTEXT INDEX idx_content (content)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx_content', 'news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
 
    }

    public function down()
    {
        echo "m190913_154705_add_index_news_table cannot be reverted.\n";

        return false;
    }
    */
}
