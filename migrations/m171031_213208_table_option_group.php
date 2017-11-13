<?php

use yii\db\Migration;

class m171031_213208_table_option_group extends Migration {

    public function safeUp() {
        
    }

    public function safeDown() {
        echo "m171031_213208_table_option_group cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up() {
        $this->createTable('{{%OptionGroup}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);
    }

    public function down() {
        $this->dropTable('{{%OptionGroup}}');
        echo "m171031_213208_table_option_group cannot be reverted.\n";

        return false;
    }

}
