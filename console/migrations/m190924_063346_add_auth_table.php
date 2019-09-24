<?php

use yii\db\Migration;

/**
 * Class m190924_063346_add_auth_table
 */
class m190924_063346_add_auth_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('auth', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'source' => $this->string()->notNull(),
            'source_id' => $this->string()->notNull(),
        ]);

        $this->addForeignKey('fk-auth-user_id-user-id', 'auth', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('auth');
    }
    
    
}
