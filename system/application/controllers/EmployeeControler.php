<?php

class EmployeeControler extends Controller {

	function EmployeeControler()
	{
		parent::Controller();	
	}
	        
        function edit($id)
	{
            $data['yesNo'] = array(0  => 'Nie', 1 => 'Tak');
            if($id == 0){
                $data['model'] = new Employee();
            }else{
                $data['model'] = Doctrine::getTable('Employee')->find($id);
            }
            $this->load->view('Employee/edit',$data);
	}
	
	function delete($id)
	{	
            $u = Doctrine::getTable('Employee')->find($id);
            $u->delete();
            $res = array ('Selector'=>'#employee','Url'=>'index.php/Admin/employee');
            echo json_encode($res);
	}
	
	function save()
	{	 
            if($_POST["id"] != NULL){
                $id = $_POST["id"];
                $u = Doctrine::getTable('Employee')->find($id);
                
            }else{
                $u = new Employee();
            }
            $u->login = $_POST["login"];
            $u->password = $_POST["password"];
            $u->firstName = $_POST["firstName"];
            $u->lastName = $_POST["lastName"];
            $u->phone = $_POST["phone"];
            $u->email = $_POST["email"];
            $u->adress = $_POST["adress"];
            $u->isAdmin = $_POST["isAdmin"];
            $u->save();
            $res = array ('Selector'=>'#employee','Url'=>'index.php/Admin/employee');
            echo json_encode($res);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */