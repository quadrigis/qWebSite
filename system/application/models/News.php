<?php
class News extends Doctrine_Record
{
	// define table columns in this function
	public function setTableDefinition() {

		$this->hasColumn('descriptionId', 'integer', 11);
		$this->hasColumn('date', 'datetime');
		$this->hasColumn('employeeId', 'integer',11);
	}

	// setup some options
	public function setUp() {
                $this->hasOne('Employee', array(
	            'local' => 'employeeId',
	            'foreign' => 'id'
	        ));
                
                $this->hasOne('Description', array(
	            'local' => 'descriptionId',
	            'foreign' => 'id'
	        ));
	}
}
?>
