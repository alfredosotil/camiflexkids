<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ubigeoperu`.
 */
class m171127_153641_create_ubigeoperu_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('{{%ubigeoperu}}', [
            'id' => $this->primaryKey(),
            'departamento' => $this->string(32)->notNull(),
            'provincia' => $this->string(32)->notNull(),
            'distrito' => $this->string(32)->notNull(),
            'nombre' => $this->string(32)->notNull(),
        ]);

        $path = Yii::getAlias('@app/data/ubigeo-peru.json');
        $str = file_get_contents($path);
        $json = json_decode($str, true);
        foreach ($json as $value) {
            $this->insert('{{%ubigeoperu}}', [
                'departamento' => $value['departamento'],
                'provincia' => $value['provincia'],
                'distrito' => $value['distrito'],
                'nombre' => $value['nombre'],
            ]);
        }
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('ubigeoperu');
    }

}
