<?php
class Login extends Controller 
{
	function index($error_msg = NULL)
	{	
		$this->load->model('backoffice/theme_model');
		
		$data['title'] = 'Agel Online Support System : Login';
		$data['theme'] = $this->theme_model->get_theme();
		$data['error_msg'] = ($error_msg != NULL ? $error_msg : '');
		
		$this->load->view('login', $data);	
	}
	
	function validate()
	{
		$this->load->model('member/member_model');
		$validation = $this->member_model->validate();
		
		if($validation) // if the user's credentials validated...
		{
			$user = $this->member_model->get_detail($this->input->post('username'));			
			
			$data = array(
				'name' => $user['first_name'].' '.$user['last_name'],
				'id' => $user['id_member'],
				'login_status' => TRUE
			);
			$this->session->set_userdata($data);
			redirect('backoffice');
		}
		else // incorrect username or password
		{
			$error_msg = 'Incorrect Username or Password';
			$this->index($error_msg);
		}
		
	}
	
	function check_login_status()
	{
		$login_status = $this->session->userdata('login_status');
		if(!isset($login_status) || $login_status != TRUE)
		{
			echo 'You don\'t have permission to access this page. ';
			echo anchor('login', 'Login');
			die();		
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}

/* End of file login.php */
/* Location: application/modules/login/controllers/login.php */