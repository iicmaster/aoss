<?php
class Mobile extends Controller 
{	
	function __construct()
	{
		parent::Controller(); 
		
		$this->load->model('mobile_model');
	}
	
	function index()
	{				
		$data['title'] = 'Agel Online Support System';
		
		$this->load->view('index', $data);
	}
	
	function news()
	{				
		$data['title'] = 'ข่าวประชาสัมพันธ์';
		
		$this->load->view('news', $data);
	}
	
	function promotion()
	{				
		$data['title'] = 'โปรโมชั่น';
		
		$this->load->view('promotion', $data);
	}
	
	function calendar()
	{				
		$data['title'] = 'ปฏิทิน';
		
		$this->load->view('carlendar', $data);
	}
	
	function policy()
	{				
		$data['title'] = 'ข้อกำหนดสำหรับสมาชิก';
		
		$this->load->view('policy', $data);
	}
	
}

/* End of file mobile.php */
/* Location: application/modules/mobile/controllers/mobile.php */