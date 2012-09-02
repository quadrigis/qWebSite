<?php

class DictionaryControler extends Controller {

	function DictionaryControler()
	{
		parent::Controller();	
	}
        
	function edit($id)
	{
            if($id == 0){
                $data['model'] = new Dictionary();
            }else{
                $data['model'] = Doctrine::getTable('Dictionary')->find($id);
            }
            $this->load->view('Dictionary/edit',$data);
	}
	
	function delete($id)
	{	
            $u = Doctrine::getTable('Dictionary')->find($id);
            $u->delete();
            $res = array ('Selector'=>'#dictionary','Url'=>'index.php/Admin/dictionary');
            echo json_encode($res);
	}
	
	function save()
	{	 
            if($_POST["id"] != NULL){
                $id = $_POST["id"];
                $u = Doctrine::getTable('Dictionary')->find($id);
                $u->klucz = $_POST["klucz"];
                $u->wartoscPL = $_POST["wartoscPL"];
                $u->wartoscEN = $_POST["wartoscEN"];
                $u->dod1 = $_POST["dod1"];
                $u->save();
            }else{
                $u = new Dictionary();
                $u->klucz = $_POST["klucz"];
                $u->wartoscPL = $_POST["wartoscPL"];
                $u->wartoscEN = $_POST["wartoscEN"];
                $u->dod1 = $_POST["dod1"];
                $u->save();
            }
            $res = array ('Selector'=>'#dictionary','Url'=>'index.php/Admin/dictionary');
            echo json_encode($res);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */