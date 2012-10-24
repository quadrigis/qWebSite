<?php

class JobControler extends Controller {

	function JobControler()
	{
		parent::Controller();	
	}
        
        function dataTable()
        {
            $model = Doctrine::getTable('Job')->findAll();
            $data['model'] = $model;
            $this->load->view('Job/dataTable',$data);
        }
	
	function edit($id)
	{
            if($id == 0){
                $data['model'] = new Job();
            }else{
                $data['model'] = Doctrine::getTable('Job')->find($id);
            }
            $this->load->view('Job/edit',$data);
	}
	
	function delete($id)
	{	
            $u = Doctrine::getTable('Job')->find($id);
            $u->delete();
            $res = array ('Selector'=>'#job','Url'=>'index.php/Admin/job');
            echo json_encode($res);
	}
	
	function save()
	{	 
            if($_POST["id"] != NULL){
                $jobId = $_POST["id"];
                $u = Doctrine::getTable('Job')->find($jobId);
                $u->name = $_POST["name"];
                $u->Description->pl = $_POST["Description_pl_Job"];
                $u->Description->en = $_POST["Description_en_Job"];
                $u->save();
            }else{
                $u = new Job();
                $u->name = $_POST["name"];
                $d = new Description();
                $d->pl = $_POST["Description_pl_Job"];
                $d->en = $_POST["Description_en_Job"];
                $u->Description = $d;
                $u->save();
            }
            $res = array ('Selector'=>'#job','Url'=>'index.php/Admin/job');
            echo json_encode($res);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */