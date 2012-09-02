<?php
class Job extends Doctrine_Record
{
	// define table columns in this function
	public function setTableDefinition() {

		$this->hasColumn('name', 'string', 100);
		$this->hasColumn('descriptionId', 'integer', 11);
	}

	// setup some options
	public function setUp() {
                $this->setTableName('jobs');
                $this->hasOne('Description', array(
	            'local' => 'descriptionId',
	            'foreign' => 'id'
	        ));
                
                $this->hasMany('EmployeeAssignment as EmployeeAssignments', array(
	            'local' => 'id',
	            'foreign' => 'jobId'
	        ));
	}
}
?>
