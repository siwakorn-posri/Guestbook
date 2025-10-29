<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%guestbook}}`.
 */
class m251020_110815_create_guestbook_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%guestbook}}', [
            'id' => $this->primaryKey(),              
            'name' => $this->string()->notNull(),     
            'email' => $this->string()->notNull(),    
            'message' => $this->text()->notNull(),    
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'), 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%guestbook}}');
    }
}
