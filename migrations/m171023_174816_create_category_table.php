<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m171023_174816_create_category_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'active' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('{{%Category}}');
    }

}
