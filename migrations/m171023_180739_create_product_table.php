<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m171023_180739_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%Product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'sku' => $this->string()->notNull()->unique(),
            'price' => $this->double()->notNull(),
            'weight' => $this->double(),
            'cart_desc' =>  $this->string(32)->notNull(),
            'short_desc' =>  $this->string(100),
            'long_desc' =>  $this->string(250)->notNull(),
            'thumb' =>  $this->string(60)->notNull(),
            'image' =>  $this->string(60)->notNull(),
            'category_id' =>  $this->integer()->notNull(),
            'created_at' =>  $this->integer()->notNull(),
            'updated_at' =>  $this->integer()->notNull(),
            'stock' =>  $this->float()->notNull(),
            'active' =>  $this->smallInteger()->notNull()->defaultValue(1),
        ]);
        
        $this->createIndex(
            'idx-product-category-id',
            '{{%Product}}',
            'category_id'
        );
        
        $this->addForeignKey(
            'fk-product-category-id',
            '{{%Product}}',
            'category_id',
            '{{%Category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk-product-category-id',
            '{{%Product}}'
        );

        $this->dropIndex(
            'idx-product-category-id',
            '{{%Product}}'
        );

        $this->dropTable('{{%Product}}');
    }
}
