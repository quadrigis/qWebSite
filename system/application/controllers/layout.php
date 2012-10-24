<?php

class Layout extends Controller {

	function Layout()
	{
		parent::Controller();	
	}
	
	function index()
	{
                $lang = "pl";
                $sel = 0;
                $reload = false;
                if(array_key_exists('lang', $_POST)){
                    $lang = $_POST['lang'];
                    $reload = true;
                }
                if(array_key_exists('sel', $_POST)){
                    $sel = $_POST['sel'];
                }
                $this->load->model('SlownikStruktura');
                $data['tabs'] = $this->SlownikStruktura->GetTabs($lang);
                $data['struct'] = $this->SlownikStruktura->GetSlownik($lang);
                $data['lang'] = $lang;
                $data['sel'] = $sel;
                if($reload){
                    $this->load->view('_layout', $data);
                }else{
                    $data['mainContent'] = '_layout';
                    $this->load->view('layout', $data);
                }
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */