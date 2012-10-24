<?php

class Login extends Controller {

	function Login()
	{
		parent::Controller();	
	}
	
	function index()
	{	 
		$this->load->view('login');
	}
        
	function submit()
	{	 
            if ($this->_submit_validate() === FALSE) {
			$this->index();
                        return;
		}
                
                $data['mainContent'] = 'Admin/index';
		$this->load->view('layout',$data);
	}
        
	function logout()
	{	 
		$this->session->sess_destroy(); 
	}

	private function _submit_validate() {

		$this->form_validation->set_rules('login', 'Login',
			'trim|required|callback_authenticate');
		$this->form_validation->set_rules('password', 'Hasło',
			'trim|required');
                
                $this->form_validation->set_message('required', 'Proszę podać %s.');
                $this->form_validation->set_message('authenticate','Zły login, proszę spróbować jeszcze raz.');
                

		return $this->form_validation->run();

	}

	public function authenticate() {
	        return CurrentUser::login($this->input->post('login'),
	                                    $this->input->post('password'));
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */