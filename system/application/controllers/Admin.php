<?php

class Admin extends Controller {

	function Admin()
	{
		parent::Controller();	
	}
	
	function Index()
	{
            if(CurrentUser::User() == TRUE){
                $data['mainContent'] = 'Admin/index';
                $this->load->view('layout', $data);
            }else
            {
                $data['mainContent'] = 'login';
                $this->load->view('layout', $data);
            }
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */