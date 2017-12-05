<?php

use yii\db\Migration;

class m171205_204917_add_ispaid_column_to_order extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%Order}}', 'ispaid', $this->smallInteger()->notNull()->defaultValue(0)->after('tracking_number'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%Order}}', 'ispaid');
    }
}
