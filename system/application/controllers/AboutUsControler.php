<?php

class AboutUsControler extends Controller {

	function AboutUsControler()
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
                $this->load->view('AboutUs/indexPL');
            }else{
                $this->load->view('AboutUs/indexEN');
            }
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */