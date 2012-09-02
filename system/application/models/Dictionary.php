<?php
class Dictionary extends Doctrine_Record
{
	// define table columns in this function
	public function setTableDefinition() {

		$this->hasColumn('klucz', 'string', 100);
		$this->hasColumn('wartoscPL', 'string', 65535);
		$this->hasColumn('wartoscEN', 'string', 65535);
		$this->hasColumn('dod1', 'string', 65535);
	}

	// setup some options
	public function setUp() {
            $this->setTableName('Slownik');
	}
}
?>
