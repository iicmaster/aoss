<?php
class Site extends Controller 
{
	function __construct()
	{
		parent::Controller();   
	}
	
	function index()
	{	
		$data['title'] = 'Agel Independent';
		$data['themeName'] = 'deepEmotion';
		
		$this->load->view($data['themeName'].'/index', $data);
	}
	
	function product()
	{	
		$data['title'] = 'Product';
		$data['themeName'] = 'deepEmotion';
		
		$this->load->view($data['themeName'].'/product', $data);
	}
}

/* End of file site.php */
/* Location: application/modules/site/controllers/site.php */