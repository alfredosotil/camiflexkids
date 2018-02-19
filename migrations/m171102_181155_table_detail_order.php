<?php

use yii\db\Migration;

class m171102_181155_table_detail_order extends Migration
{

    public function safeUp()
    {
        
    }

    public function safeDown()
    {
        echo "m171101_153241_table_detail_cart cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%DetailOrder}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'price_per_unit' => $this->double()->notNull(),
            'price' => $this->double()->notNull(),
            'tax' => $this->double()->notNull(),
            'vat' => $this->double()->notNull(),
            'qty' => $this->integer(),
            'order_id' => $this->integer(),
            'product_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);

        $this->createIndex(
            'idx-detailorder-order-id', '{{%DetailOrder}}', 'order_id'
        );

        $this->addForeignKey(
            'fk-detailorder-order-id', '{{%DetailOrder}}', 'order_id', '{{%Order}}', 'id', 'CASCADE'
        );

        $this->createIndex(
            'idx-detailorder-product-id', '{{%DetailOrder}}', 'product_id'
        );

        $this->addForeignKey(
            'fk-detailorder-product-id', '{{%DetailOrder}}', 'product_id', '{{%Product}}', 'id', 'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk-detailorder-order-id', '{{%DetailOrder}}'
        );

        $this->dropIndex(
            'idx-detailorder-order-id', '{{%DetailOrder}}'
        );

        $this->dropForeignKey(
            'fk-detailorder-product-id', '{{%DetailOrder}}'
        );

        $this->dropIndex(
            'idx-detailorder-product-id', '{{%DetailOrder}}'
        );

        $this->dropTable('{{%DetailOrder}}');
        echo "m171101_153241_table_detail_cart cannot be reverted.\n";

        return false;
    }
}
