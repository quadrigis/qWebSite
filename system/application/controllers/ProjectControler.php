<?php

class ProjectControler extends Controller {

	function ProjectControler()
	{
		parent::Controller();	
	}
	
	function index()
	{
            $lang = "pl";
            if(array_key_exists('lang', $_POST)){
                $lang = $_POST['lang'];
            }
            if($lang == "pl"){
                $this->load->view('Project/indexPL');
            }else{
                $this->load->view('Project/indexEN');
            }
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */