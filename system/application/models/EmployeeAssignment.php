<?php
class EmployeeAssignment extends Doctrine_Record
{
	// define table columns in this function
	public function setTableDefinition() {

		$this->hasColumn('employeeId', 'integer', 11);
		$this->hasColumn('jobId', 'integer', 11);
		$this->hasColumn('start', 'datetime');
		$this->hasColumn('end', 'datetime');
	}

	// setup some options
	public function setUp() {
                $this->setTableName('employeeassignment');
                $this->hasOne('Employee', array(
	            'local' => 'employeeId',
	            'foreign' => 'id'
	        ));
                $this->hasOne('Job', array(
	            'local' => 'jobId',
	            'foreign' => 'id'
	        ));
                
                $this->hasMany('ProjectAssignment as ProjectAssignments', array(
	            'local' => 'id',
	            'foreign' => 'employeeAssignmentId'
	        ));
	}
}
?>
