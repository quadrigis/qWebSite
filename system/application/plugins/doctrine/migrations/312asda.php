<?php
class Migration201209432 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable( 'migration_test2', array( 'field1' => array( 'type' => 'string' ) ) );
    }

    public function down()
    {
        $this->dropTable( 'migration_test2' );
    }
}
?>