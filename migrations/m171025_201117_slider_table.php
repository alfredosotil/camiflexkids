<?php

use yii\db\Migration;

class m171025_201117_slider_table extends Migration
{

    public function safeUp()
    {
        
    }

    public function safeDown()
    {
        echo "m171025_201117_slider_table cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%Slider}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'short_desc' => $this->string(100),
            'long_desc' => $this->string(250)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%Slider}}');
        echo "m171025_201117_slider_table cannot be reverted.\n";
        return false;
    }
}
