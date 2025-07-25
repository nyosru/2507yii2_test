<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m250725_230709_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(), // заголовок
            'date' => $this->date()->notNull(),      // дата
            'text' => $this->text()->notNull(),      // текст записи
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post');
    }
}
