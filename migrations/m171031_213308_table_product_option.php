<?php

use yii\db\Migration;

class m171031_213308_table_product_option extends Migration
{

    public function safeUp()
    {
        
    }

    public function safeDown()
    {
        echo "m171031_213308_table_product_option cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%ProductOption}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'priceincrement' => $this->integer(),
            'product_id' => $this->integer()->notNull(),
            'option_id' => $this->integer()->notNull(),
            'optiongroup_id' => $this->integer()->notNull(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);

        $this->createIndex(
            'idx-productoption-product-id', '{{%ProductOption}}', 'product_id'
        );

        $this->addForeignKey(
            'fk-productoption-product-id', '{{%ProductOption}}', 'product_id', '{{%Product}}', 'id', 'CASCADE'
        );

        $this->createIndex(
            'idx-productoption-option-id', '{{%ProductOption}}', 'option_id'
        );

        $this->addForeignKey(
            'fk-productoption-option-id', '{{%ProductOption}}', 'option_id', '{{%Option}}', 'id', 'CASCADE'
        );

        $this->createIndex(
            'idx-productoption-optiongroup-id', '{{%ProductOption}}', 'optiongroup_id'
        );

        $this->addForeignKey(
            'fk-productoption-optiongroup-id', '{{%ProductOption}}', 'optiongroup_id', '{{%OptionGroup}}', 'id', 'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'idx-productoption-product-id', '{{%ProductOption}}'
        );

        $this->dropIndex(
            'fk-productoption-product-id', '{{%ProductOption}}'
        );
        $this->dropForeignKey(
            'idx-productoption-option-id', '{{%ProductOption}}'
        );

        $this->dropIndex(
            'fk-productoption-option-id', '{{%ProductOption}}'
        );
        $this->dropForeignKey(
            'idx-productoption-optiongroup-id', '{{%ProductOption}}'
        );

        $this->dropIndex(
            'fk-productoption-optiongroup-id', '{{%ProductOption}}'
        );

        $this->dropTable('{{%ProductOption}}');
        echo "m171031_213308_table_product_option cannot be reverted.\n";

        return false;
    }
}
