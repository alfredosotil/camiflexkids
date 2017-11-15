<?php

use yii\db\Migration;

/**
 * Handles adding color to table `product`.
 */
class m171101_162621_add_color_column_to_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%Product}}', 'color', $this->string()->after('weight')->notNull()->unique());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%Product}}', 'color');
    }
}
