<?php

class Admin extends Controller {

	function Admin()
	{
		parent::Controller();	
	}
	
	function index()
	{
            if(Current_User::user() == TRUE){
                $data['main_content'] = 'Admin/index';
                $this->load->view('layout', $data);
            }else
            {
                $data['main_content'] = 'login';
                $this->load->view('layout', $data);
            }
	}
	
	function news()
	{
                $q = Doctrine::getTable('News')->findAll();
                $data['result'] = $q;
		$this->load->view('Admin/news', $data);
	}
	
	function employee()
	{
                $q = Doctrine::getTable('Employee')->findAll();
                $data['result'] = $q;
		$this->load->view('Admin/employee', $data);
	}
	
	function job()
	{
                $q = Doctrine::getTable('Job')->findAll();
                $data['result'] = $q;
		$this->load->view('Admin/job', $data);
	}
	
	function dictionary()
	{
                $q = Doctrine::getTable('Dictionary')->findAll();
                $data['result'] = $q;
		$this->load->view('Admin/dictionary', $data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */