<?php

class NewsControler extends Controller {

	function NewsControler()
	{
		parent::Controller();	
	}
        
        function index(){
            $lang = "pl";
            if(array_key_exists('lang', $_POST)){
                $lang = $_POST['lang'];
            }
            if($lang == "pl"){
                $this->load->view('News/indexPL');
            }else{
                $this->load->view('News/indexEN');
            }
        }
        
        function edit($id)
	{
            $tmp = array(0 => '');
            $emps= Doctrine::getTable('Employee')->findAll();
            foreach ($emps as $emp){
                $tmp[$emp->id] = $emp->login;
            }
            
            if($id == 0){
                $data['model'] = new News();
            }else{
                $data['model'] = Doctrine::getTable('News')->find($id);
            }
            $data['employess'] = $tmp;
            $this->load->view('News/edit',$data);
	}
	
	function delete($id)
	{	
            $u = Doctrine::getTable('News')->find($id);
            $u->delete();
            $res = array ('Selector'=>'#news','Url'=>'index.php/Admin/news');
            echo json_encode($res);
	}
	
	function save()
	{	 
            if($_POST["id"] != NULL){
                $id = $_POST["id"];
                $u = Doctrine::getTable('News')->find($id);
                $u->Description->pl = $_POST["Description_pl_News"];
                $u->Description->en = $_POST["Description_en_News"];
                
            }else{
                $u = new News();
                $d = new Description();
                $d->pl = $_POST["Description_pl_News"];
                $d->en = $_POST["Description_en_News"];
                $u->Description = $d;
            }
            $emp = $_POST["employeeId"] != 0 ? Doctrine::getTable('Employee')->find($_POST["employeeId"]) : NULL;
            $u->Employee = $emp;
            $u->date = $_POST["date"];
            $u->save();
            $res = array ('Selector'=>'#news','Url'=>'index.php/Admin/news');
            echo json_encode($res);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */