<?php
class Backoffice extends Controller 
{
	function __construct()
	{
		parent::Controller();   
	}
	
	function index()
	{	
		echo Modules::run('login/check_login_status');
		
		$this->load->model('theme_model');
		
		$data['title'] = 'Dash Board';
		$data['theme'] = $this->theme_model->get_theme();
		$data['theme']['head_text_1'] = $this->session->userdata('name');
		$data['theme']['head_text_2'] = 'Agel Online Support System';
		$data['main_content'] = 'dashboard';
		
		$this->load->view('main', $data);
	}
	
	function dashboard()
	{
		$this->load->view('dashboard');
	}
}

/* End of file backoffice.php */
/* Location: application/modules/backoffice/controllers/backoffice.php */