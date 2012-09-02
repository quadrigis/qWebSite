<?php
class Employee extends Doctrine_Record
{
	// define table columns in this function
	public function setTableDefinition()
        {
            $this->hasColumn('login', 'string', 255, array('unique' => 'true','notnull' => 'true'));
            $this->hasColumn('password', 'string', 255, array('notnull' => 'true'));
            $this->hasColumn('lastName', 'string', 255);
            $this->hasColumn('firstName', 'string', 255);
            $this->hasColumn('phone', 'string', 20);
            $this->hasColumn('email', 'string',100);
            $this->hasColumn('adress', 'string', 255);
            $this->hasColumn('isAdmin', 'boolean', 1, array('notnull' => 'true'));   
        }

        public function setUp()
        {
            $this->setTableName('Employee');
            $this->hasMutator('password', 'encrypt_password');
            
            $this->hasMany('EmployeeAssignment as EmployeeAssignments', array(
	            'local' => 'id',
	            'foreign' => 'employeeId'
	        ));
        }

        protected function encrypt_password($value)
        {
            $this->_set('password', md5($value));
        }
}
?>
