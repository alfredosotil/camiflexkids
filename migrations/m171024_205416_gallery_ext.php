<?php

use yii\db\Migration;

class m171024_205416_gallery_ext extends zxbodya\yii2\galleryManager\migrations\m140930_003227_gallery_manager {

    public function safeUp() {
        
    }

    public function safeDown() {
        echo "m171024_205416_gallery_ext cannot be reverted.\n";

        return false;
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m171024_205416_gallery_ext cannot be reverted.\n";

      return false;
      }
     */
}
