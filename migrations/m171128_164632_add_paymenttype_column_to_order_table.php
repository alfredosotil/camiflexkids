<?php

use yii\db\Migration;

/**
 * Handles adding paymenttype to table `order`.
 */
class m171128_164632_add_paymenttype_column_to_order_table extends Migration
{

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%Order}}', 'typepayment', $this->string(20)->after('tracking_number'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%Order}}', 'typepayment');
    }
}
