<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m171101_153241_create_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%Order}}', [
            'id' => $this->primaryKey(),
            'amount' => $this->double()->notNull(),
            'ship_name' => $this->string()->notNull(),
            'ship_address' => $this->string()->notNull(),
            'departament' => $this->string()->notNull(),
            'province' => $this->string()->notNull(),
            'district' => $this->string()->notNull(),
            'country' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'fax' => $this->string(),
            'email' => $this->string()->notNull(),
            'shipping' => $this->double()->notNull(),
            'tax' => $this->double()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'shipped' => $this->smallInteger()->notNull()->defaultValue(0),
            'tracking_number' => $this->string()->notNull(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('order');
    }
}
