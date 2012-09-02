<?php
class Description extends Doctrine_Record
{
	// define table columns in this function
	public function setTableDefinition() {

		$this->hasColumn('pl', 'string', 65535);
		$this->hasColumn('en', 'string', 65535);
	}

	// setup some options
	public function setUp() {
                $this->setTableName('descriptions');
	}
}
?>
