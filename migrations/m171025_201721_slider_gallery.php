<?php

use yii\db\Migration;

class m171025_201721_slider_gallery extends zxbodya\yii2\galleryManager\migrations\m140930_003227_gallery_manager
{

    public $tableName = '{{%slider_gallery}}';

    public function safeUp()
    {
        
    }

    public function safeDown()
    {
        echo "m171025_201721_slider_gallery cannot be reverted.\n";

        return false;
    }
    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m171025_201721_slider_gallery cannot be reverted.\n";

      return false;
      }
     */
}
