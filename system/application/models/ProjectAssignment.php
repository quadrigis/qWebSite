<?php
class ProjectAssignment extends Doctrine_Record
{
	// define table columns in this function
	public function setTableDefinition() {
		$this->hasColumn('projectId', 'integer', 11);
		$this->hasColumn('employeeAssignmentId', 'integer', 11);
	}

	// setup some options
	public function setUp() {
                $this->setTableName('projectAssignment');
                $this->hasOne('Project', array(
	            'local' => 'projectId',
	            'foreign' => 'id'
	        ));
                $this->hasOne('EmployeeAssignment', array(
	            'local' => 'employeeAssignmentId',
	            'foreign' => 'id'
	        ));
	}
}
?>
