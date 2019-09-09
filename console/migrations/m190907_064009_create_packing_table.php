<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%packing}}`.
 */
class m190907_064009_create_packing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%packing}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string(),
            'description' => $this->string(),
            'qty' => $this->integer(),
            'brand' => $this->string(),
            'weight' => $this->float(),
            'klient' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%packing}}');
    }
}
