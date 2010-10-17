<?php
class Site extends Controller 
{
	private $id_member;
	private $member_theme;
	
	function __construct()
	{
		parent::Controller(); 
		
		// Load
		$this->load->model('member/member_model');
		
		$this->id_member = '244848';
		$this->member_theme = $this->member_model->get_theme($this->id_member); 
	}
	
	function index()
	{		
		$data['member_theme'] = $this->member_theme;
		$data['title'] = 'Agel Independent';
		
		$this->load->view($data['member_theme']['name'].'/index', $data);
	}
	
	function product()
	{	
		$data['member_theme'] = $this->member_theme;
		$data['title'] = 'Product';
		
		$this->load->view($data['member_theme']['name'].'/product', $data);
	}
}

/* End of file site.php */
/* Location: application/modules/site/controllers/site.php */