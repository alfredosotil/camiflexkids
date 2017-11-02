<?php

use yii\db\Migration;

class m171101_153241_table_detail_cart extends Migration {

    public function safeUp() {
        
    }

    public function safeDown() {
        echo "m171101_153241_table_detail_cart cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up() {
        $this->createTable('{{%DetailCart}}', [
            'id' => $this->primaryKey(),
            'price_per_unit' => $this->double()->notNull(),
            'price' => $this->double()->notNull(),
            'tax_amount' => $this->double(),
            'qty' => $this->integer(),
            'product_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);

        $this->createIndex(
                'idx-detailcart-product-id', '{{%DetailCart}}', 'product_id'
        );

        $this->addForeignKey(
                'fk-detailcart-product-id', '{{%DetailCart}}', 'product_id', '{{%Product}}', 'id', 'CASCADE'
        );
    }

    public function down() {
        $this->dropForeignKey(
                'fk-detailcart-product-id', '{{%DetailCart}}'
        );

        $this->dropIndex(
                'idx-detailcart-product-id', '{{%DetailCart}}'
        );

        $this->dropTable('{{%DetailCart}}');
        echo "m171101_153241_table_detail_cart cannot be reverted.\n";

        return false;
    }

}
