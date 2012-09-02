<?php

class MissionControler extends Controller {

	function MissionControler()
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
                $this->load->view('Mission/indexPL');
            }else{
                $this->load->view('Mission/indexEN');
            }
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */