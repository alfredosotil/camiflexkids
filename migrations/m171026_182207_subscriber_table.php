<?php

use yii\db\Migration;

class m171026_182207_subscriber_table extends Migration
{

    public function safeUp()
    {
        
    }

    public function safeDown()
    {
        echo "m171026_182207_subscriber_table cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%Subscribers}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull()->unique(),
            'phone' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%Subscribers}}');
        echo "m171026_182207_subscriber_table cannot be reverted.\n";

        return false;
    }
}
