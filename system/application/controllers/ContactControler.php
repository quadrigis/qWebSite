<?php

class ContactControler extends Controller {

	function ContactControler()
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
                $this->load->view('Contact/indexPL');
            }else{
                $this->load->view('Contact/indexEN');
            }
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */