<?php

use yii\db\Migration;

/**
 * Handles adding notes to table `order`.
 */
class m171127_191256_add_notes_column_to_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%Order}}', 'notes', $this->string(500)->after('tracking_number'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%Order}}', 'notes');
    }
}
