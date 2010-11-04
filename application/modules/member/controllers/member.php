<?php
class Member extends Controller {
	function Member()
	{
		parent::Controller();
		
		$this->load->scaffolding('member');
	}
	
	function post_message()
	{
		$this->load->model('member_model');
		
		$data = $this->member_model->post_message();
		
		echo $data;
	}
}

/* End of file member.php */
/* Location: ./application/modules/member.php */