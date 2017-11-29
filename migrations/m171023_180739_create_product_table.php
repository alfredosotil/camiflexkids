<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m171023_180739_create_product_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('{{%Product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'sku' => $this->string()->notNull()->unique(),
            'color' => $this->string()->notNull()->unique(),
            'price' => $this->double()->notNull(),
            'weight' => $this->double(),
            'cart_desc' => $this->string(32)->notNull(),
            'short_desc' => $this->string(100),
            'long_desc' => $this->string(250)->notNull(),
            'thumb' => $this->string(60)->notNull(),
            'image' => $this->string(60)->notNull(),
            'category_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'stock' => $this->float()->notNull(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);

        $this->createIndex(
                'idx-product-category-id', '{{%Product}}', 'category_id'
        );

        $this->addForeignKey(
                'fk-product-category-id', '{{%Product}}', 'category_id', '{{%Category}}', 'id', 'CASCADE'
        );
        $array = [
            ['BLANCO', '#FFFFFF'],
            ['HUMO', '#C4C4C4'],
            ['CREMA', '#F5E091'],
            ['ARENA', '#CFB79D'],
            ['DARK SHADOW', '#383842'],
            ['AMARILLO', '#F3EA2D'],
            ['NARANJA', '#F68634'],
            ['ROSADO BEBE', '#ED90A3'],
            ['ROJO NAVIDAD', '#DB232B'],
            ['LILA LAVANDA', '#9654AC'],
            ['CELESTE BEBE', '#7DB0DB'],
            ['AZULINO', '#1C67C4'],
            ['VERDE AGUA', '#82CBC0'],
            ['VERDE LIMA', '#6DB23D'],
            ['VERDE BOSQUE', '#2F7E3D'],
        ];
        foreach ($array as $value) {
            $this->insert('{{%Product}}', [
                'name' => $value[0],
                'sku' => rand(10000000, 99999999),
                'price' => 25,
                'category_id' => 1,
                'thumb' => 'nofile',
                'image' => 'nofile',
                'stock' => 1000,
                'color' => $value[1],
                'cart_desc' => 'Piso ' . $value[0],
                'long_desc' => 'Piso ' . $value[0] . ' - ' . $value[1],
                'created_at' => strtotime('now'),
                'updated_at' => strtotime('now'),
            ]);
        }
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropForeignKey(
                'fk-product-category-id', '{{%Product}}'
        );

        $this->dropIndex(
                'idx-product-category-id', '{{%Product}}'
        );

        $this->dropTable('{{%Product}}');
    }

}
