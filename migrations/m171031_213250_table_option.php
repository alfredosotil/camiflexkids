<?php

use yii\db\Migration;

class m171031_213250_table_option extends Migration
{

    public function safeUp()
    {
        
    }

    public function safeDown()
    {
        echo "m171031_213250_table_option cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%Option}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'optiongroup_id' => $this->integer()->notNull(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);

        $this->createIndex(
            'idx-option-optiongroup-id', '{{%Option}}', 'optiongroup_id'
        );

        $this->addForeignKey(
            'fk-option-optiongroup-id', '{{%Option}}', 'optiongroup_id', '{{%OptionGroup}}', 'id', 'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk-option-optiongroup-id', '{{%Option}}'
        );

        $this->dropIndex(
            'idx-product-category-id', '{{%Option}}'
        );

        $this->dropTable('{{%Option}}');
        echo "m171031_213250_table_option cannot be reverted.\n";

        return false;
    }
}
