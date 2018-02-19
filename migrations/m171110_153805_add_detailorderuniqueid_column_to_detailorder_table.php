<?php

use yii\db\Migration;

/**
 * Handles adding detailorderuniqueid to table `detailorder`.
 */
class m171110_153805_add_detailorderuniqueid_column_to_detailorder_table extends Migration
{

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%DetailOrder}}', 'detailorderuniqueid', $this->integer()->after('id'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%DetailOrder}}', 'detailorderuniqueid');
    }
}
